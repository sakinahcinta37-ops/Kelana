<?php

namespace App\Filament\Resources\NewsCategories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;


class NewsCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(function (callable $set, $state) {
                    $set('slug', str::slug($state ?? ''));
                }),
                TextInput::make('slug')
                ->required()
                ->readOnly()
                ->dehydrated(),
            ]);
    }
}
