<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('sku')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Textarea::make('description')
                    ->columnSpanFull(),

                TextInput::make('price')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                TextInput::make('stock')
                    ->numeric()
                    ->default(0)
                    ->required(),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('products'),

                Toggle::make('is_active')
                    ->default(true),

                Toggle::make('is_featured')
                    ->default(false),
            ])
            ->columns(2);
    }
}
