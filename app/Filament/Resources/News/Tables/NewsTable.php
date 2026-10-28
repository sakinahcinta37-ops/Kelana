<?php

namespace App\Filament\Resources\News\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;


class NewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author.name'),
                TextColumn::make('newscategory.title'),
                TextColumn::make('title'),
                TextColumn::make('slug'),
                ImageColumn::make('thumbnail')
                ->disk('public'),
                ToggleColumn::make('is_featured')
            ])
            ->filters([
                SelectFilter::make('author_id')
                ->relationship('author', 'name')
                ->label('Select Author'),
                SelectFilter::make('news_category_id')
                ->relationship('newsCategory', 'title')
                ->label('Select Category')
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
