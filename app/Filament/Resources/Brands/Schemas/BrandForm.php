<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Brand Name')
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Logo')
                    ->image()
                    ->disk('public')
                    ->directory('brands')
                    ->columnSpanFull(),
            ])
            ->columns(2);
    }
}
