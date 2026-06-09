<?php

namespace App\Filament\Admin\Resources\BehindScenes\Pages;

use App\Filament\Admin\Resources\BehindScenes\BehindSceneResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBehindScenes extends ListRecords
{
    protected static string $resource = BehindSceneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
