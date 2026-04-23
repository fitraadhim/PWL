<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    Section::make('Post Details')
                        ->description('Informasi utama konten post')
                        ->icon(Heroicon::OutlinedDocumentText)
                        ->schema([
                            Group::make([
                                TextInput::make('title')
                                    ->required()
                                    ->rules([
                                        'min:3',
                                        'max:100',
                                    ]),

                                TextInput::make('slug')
                                    ->required()
                                    ->rules('min:3|max:100')
                                    ->unique(ignoreRecord: true)
                                    ->validationMessages([
                                        'unique' => 'Slug harus unik dan tidak boleh sama.',
                                        'min' => 'Slug minimal 3 karakter.',
                                    ]),

                                Select::make('category_id')
                                    ->label('Category')
                                    ->required()
                                    ->relationship('category', 'name')
                                    ->searchable()
                                    ->preload(),

                                TextInput::make('color')
                                    ->maxLength(50),
                            ])->columns(2),

                            MarkdownEditor::make('body')
                                ->columnSpanFull(),
                        ]),
                ])->columnSpan(2),

                Group::make([
                    Section::make('Image Upload')
                        ->description('Upload gambar utama post')
                        ->icon(Heroicon::OutlinedPhoto)
                        ->schema([
                            FileUpload::make('image')
                                ->required()
                                ->image()
                                ->disk('public')
                                ->directory('post'),
                        ]),

                    Section::make('Meta')
                        ->description('Pengaturan metadata publikasi')
                        ->icon(Heroicon::OutlinedAdjustmentsHorizontal)
                        ->schema([
                            TagsInput::make('tags'),

                            Toggle::make('published')
                                ->default(false),

                            DatePicker::make('published_at'),
                        ]),
                ])->columnSpan(1),
            ])
            ->columns(3);
    }
}
