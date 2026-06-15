<?php

namespace App\Filament\Pages;

use App\Models\Translation;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Concerns\RestrictsFileUploadsToSchemaComponents;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class Translations extends Page implements HasSchemas
{
    use InteractsWithSchemas;
    use RestrictsFileUploadsToSchemaComponents;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-language';
    protected static ?string $navigationLabel = 'Translations';
    protected static ?int $navigationSort = 99;
    protected string $view = 'filament.pages.translations';

    public ?array $data = [];

    public function mount(): void
    {
        $rows = Translation::all()->keyBy(fn ($t) => $t->group . '.' . $t->key);

        $filled = [];
        foreach ($rows as $dotKey => $row) {
            [$group, $key] = explode('.', $dotKey, 2);
            $filled[$group][$key]['en'] = $row->value_en;
            $filled[$group][$key]['ar'] = $row->value_ar;
        }

        $this->form->fill($filled);
    }

    public function form(Schema $schema): Schema
    {
        $groups = [
            'general' => 'General',
            'nav'     => 'Navigation',
            'slider'  => 'Slider',
            'about'   => 'About Us',
            'footer'  => 'Footer',
            'brands'  => 'Brands',
            'form'    => 'Contact Form',
        ];

        $sections = [];

        foreach ($groups as $groupKey => $groupLabel) {
            $keys = Translation::where('group', $groupKey)->pluck('key');

            $fields = [];
            foreach ($keys as $key) {
                $isLong = str_starts_with($key, 'about_c') || in_array($key, ['welcome', 'copyright']);
                $label  = ucwords(str_replace('_', ' ', $key));

                if ($isLong) {
                    $fields[] = Textarea::make("{$groupKey}.{$key}.en")
                        ->label("{$label} (EN)")
                        ->rows(3)
                        ->columnSpanFull();
                    $fields[] = Textarea::make("{$groupKey}.{$key}.ar")
                        ->label("{$label} (AR)")
                        ->rows(3)
                        ->columnSpanFull()
                        ->extraAttributes(['dir' => 'rtl']);
                } else {
                    $fields[] = TextInput::make("{$groupKey}.{$key}.en")
                        ->label("{$label} (EN)")
                        ->columnSpan(1);
                    $fields[] = TextInput::make("{$groupKey}.{$key}.ar")
                        ->label("{$label} (AR)")
                        ->columnSpan(1)
                        ->extraAttributes(['dir' => 'rtl']);
                }
            }

            $sections[] = Section::make($groupLabel)
                ->schema($fields)
                ->columns(2)
                ->collapsible()
                ->collapsed($groupKey !== 'general');
        }

        return $schema
            ->components($sections)
            ->statePath('data');
    }

    public function save(): void
    {
        $state = $this->form->getState();

        foreach ($state as $group => $keys) {
            foreach ($keys as $key => $values) {
                Translation::where('group', $group)
                    ->where('key', $key)
                    ->update([
                        'value_en' => $values['en'] ?? null,
                        'value_ar' => $values['ar'] ?? null,
                    ]);
            }
        }

        Notification::make()
            ->title('Translations saved')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Save All')
                ->icon('heroicon-o-check')
                ->color('primary')
                ->action('save'),
        ];
    }
}
