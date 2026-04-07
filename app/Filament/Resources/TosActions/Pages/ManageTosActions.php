<?php

namespace App\Filament\Resources\TosActions\Pages;

use App\Filament\Resources\TosActions\TosActionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageTosActions extends ManageRecords
{
    protected static string $resource = TosActionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
