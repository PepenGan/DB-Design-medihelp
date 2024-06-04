<?php

namespace App\Filament\Resources\ApotekResource\Pages;

use App\Filament\Resources\ApotekResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApoteks extends ListRecords
{
    protected static string $resource = ApotekResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
