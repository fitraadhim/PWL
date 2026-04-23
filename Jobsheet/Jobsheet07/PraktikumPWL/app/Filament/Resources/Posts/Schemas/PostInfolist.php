<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class PostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Post Tabs')
                    ->vertical()
                    ->tabs([
                        Tab::make('Post Info')
                            ->icon('heroicon-o-document-text')
                            ->schema([
                                TextEntry::make('title')
                                    ->label('Post Title')
                                    ->weight('bold')
                                    ->color('primary'),

                                TextEntry::make('slug')
                                    ->label('Slug')
                                    ->badge()
                                    ->color('success'),

                                TextEntry::make('body')
                                    ->label('Content')
                                    ->markdown()
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),

                        Tab::make('Publication & Category')
                            ->icon('heroicon-o-currency-dollar')
                            ->badge(fn ($record): string => $record->published ? 'Published' : 'Draft')
                            ->badgeColor(fn ($record): string => $record->published ? 'success' : 'warning')
                            ->schema([
                                TextEntry::make('category.name')
                                    ->label('Category')
                                    ->badge()
                                    ->color('info'),

                                TextEntry::make('published_at')
                                    ->label('Publish Date')
                                    ->date('d M Y')
                                    ->color('info'),

                                TextEntry::make('tags')
                                    ->label('Tags')
                                    ->listWithLineBreaks()
                                    ->badge(),
                            ])
                            ->columns(2),

                        Tab::make('Media & Status')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                ImageEntry::make('image')
                                    ->label('Post Image')
                                    ->disk('public'),

                                IconEntry::make('published')
                                    ->label('Published')
                                    ->boolean(),

                                TextEntry::make('created_at')
                                    ->label('Created At')
                                    ->date('d M Y')
                                    ->color('info'),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
