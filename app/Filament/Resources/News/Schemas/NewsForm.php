<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;


class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('author_id')
                ->relationship('author', 'name')
                ->required(),
                Select::make('news_category_id')
                ->relationship('newsCategory', 'title')
                ->required(),
                TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(function (callable $set, $state) {
                    $set('slug', str::slug($state ?? ''));
                }),
                TextInput::make('slug')
                ->required()
                ->readOnly(),
                FileUpload::make('thumbnail')
                ->image()
                ->disk('public')
                ->directory('thumbnails')
                ->required()
                ->columnSpanFull(),
                RichEditor::make('content')
                ->required()
                ->columnSpanFull(),
                Toggle::make('is_featured')
            ]);
    }
}
