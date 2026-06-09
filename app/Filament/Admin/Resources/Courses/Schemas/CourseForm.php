<?php

namespace App\Filament\Admin\Resources\Courses\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('عنوان دوره')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('اسلاگ')
                    ->required()
                    ->unique(ignoreRecord: true),

                FileUpload::make('image')
                    ->label('تصویر دوره')
                    ->image()
                    ->directory('courses'),

                Textarea::make('short_description')
                    ->label('توضیح کوتاه')
                    ->rows(3),

                Textarea::make('description')
                    ->label('توضیحات کامل')
                    ->rows(8),

                Select::make('level')
                    ->label('سطح')
                    ->options([
                        'beginner' => 'مبتدی',
                        'intermediate' => 'متوسط',
                        'advanced' => 'پیشرفته',
                    ]),

                TextInput::make('sessions_count')
                    ->label('تعداد جلسات')
                    ->numeric(),

                TextInput::make('duration')
                    ->label('مدت دوره'),

                TextInput::make('price')
                    ->label('قیمت')
                    ->numeric(),

                Toggle::make('is_active')
                    ->label('فعال')
                    ->default(true),

            ]);
    }
}