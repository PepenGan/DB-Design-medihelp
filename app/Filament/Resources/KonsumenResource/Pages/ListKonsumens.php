<?php

namespace App\Filament\Resources\KonsumenResource\Pages;

use App\Filament\Resources\KonsumenResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKonsumens extends ListRecords
{
    protected static string $resource = KonsumenResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
