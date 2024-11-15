<?php

namespace App\Filament\Admin\Resources\QualificationResource\Pages;

use App\Filament\Admin\Resources\QualificationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQualifications extends ListRecords
{
    protected static string $resource = QualificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
