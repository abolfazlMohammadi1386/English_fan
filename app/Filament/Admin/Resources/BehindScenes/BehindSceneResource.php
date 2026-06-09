<?php

namespace App\Filament\Admin\Resources\BehindScenes;

use App\Filament\Admin\Resources\BehindScenes\Pages\CreateBehindScene;
use App\Filament\Admin\Resources\BehindScenes\Pages\EditBehindScene;
use App\Filament\Admin\Resources\BehindScenes\Pages\ListBehindScenes;
use App\Filament\Admin\Resources\BehindScenes\Schemas\BehindSceneForm;
use App\Filament\Admin\Resources\BehindScenes\Tables\BehindScenesTable;
use App\Models\BehindScene;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BehindSceneResource extends Resource
{
    protected static ?string $model = BehindScene::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return BehindSceneForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BehindScenesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBehindScenes::route('/'),
            'create' => CreateBehindScene::route('/create'),
            'edit' => EditBehindScene::route('/{record}/edit'),
        ];
    }
}
