<?php

namespace App\Filament\Resources\ApotekResource\Pages;

use App\Filament\Resources\ApotekResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApotek extends EditRecord
{
    protected static string $resource = ApotekResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
