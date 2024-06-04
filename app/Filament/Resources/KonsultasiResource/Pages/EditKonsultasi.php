<?php

namespace App\Filament\Resources\KonsultasiResource\Pages;

use App\Filament\Resources\KonsultasiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKonsultasi extends EditRecord
{
    protected static string $resource = KonsultasiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
