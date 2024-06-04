<?php

namespace App\Filament\Resources\KonsultanResource\Pages;

use App\Filament\Resources\KonsultanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKonsultan extends EditRecord
{
    protected static string $resource = KonsultanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
