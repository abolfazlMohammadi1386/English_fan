<?php

namespace App\Filament\Admin\Resources\BehindScenes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BehindSceneForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('عنوان')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('media')
                    ->label('عکس یا ویدیو')
                    ->directory('behind-scenes'),

                Textarea::make('description')
                    ->label('توضیحات')
                    ->rows(5),

                Toggle::make('is_active')
                    ->label('فعال')
                    ->default(true),

            ]);
    }
}