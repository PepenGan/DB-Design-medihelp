<?php

namespace App\Filament\Resources\KonsumenResource\Pages;

use App\Filament\Resources\KonsumenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKonsumen extends EditRecord
{
    protected static string $resource = KonsumenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
