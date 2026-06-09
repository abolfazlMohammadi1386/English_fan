<?php

namespace App\Filament\Admin\Resources\Settings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('site_name')
                    ->label('نام آموزشگاه')
                    ->required(),

                Textarea::make('about_us')
                    ->label('درباره ما')
                    ->rows(6),

                TextInput::make('phone')
                    ->label('شماره تماس'),

                TextInput::make('whatsapp')
                    ->label('واتساپ'),

                TextInput::make('telegram')
                    ->label('تلگرام'),

                TextInput::make('instagram')
                    ->label('اینستاگرام'),

                TextInput::make('address')
                    ->label('آدرس'),

            ]);
    }
}