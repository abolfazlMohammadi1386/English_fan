<?php

namespace App\Filament\Admin\Resources\Books\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('عنوان کتاب')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('تصویر کتاب')
                    ->image()
                    ->directory('books'),

                Textarea::make('short_description')
                    ->label('توضیح کوتاه')
                    ->rows(4),

               
                Toggle::make('is_active')
                    ->label('فعال')
                    ->default(true),

            ]);
    }
}