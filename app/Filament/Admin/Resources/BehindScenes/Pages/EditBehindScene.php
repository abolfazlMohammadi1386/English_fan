<?php

namespace App\Filament\Admin\Resources\BehindScenes\Pages;

use App\Filament\Admin\Resources\BehindScenes\BehindSceneResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBehindScene extends EditRecord
{
    protected static string $resource = BehindSceneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
