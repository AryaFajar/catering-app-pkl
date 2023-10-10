<?php

namespace App\Filament\Resources\AnakResource\Pages;

use App\Filament\Resources\AnakResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnak extends EditRecord
{
    protected static string $resource = AnakResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
