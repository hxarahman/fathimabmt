<?php

namespace App\Filament\Resources\Enquiries\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EnquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Name')->disabled(),
                TextInput::make('subject')->label('Subject')->disabled(),
                TextInput::make('email')->label('Email')->disabled(),
                TextInput::make('phone')->label('Phone')->disabled(),
                Textarea::make('message')->label('Message')->disabled()->columnSpanFull()->rows(4),
                Toggle::make('is_solved')->label('Solved')->columnSpanFull(),
            ])
            ->columns(2);
    }
}
