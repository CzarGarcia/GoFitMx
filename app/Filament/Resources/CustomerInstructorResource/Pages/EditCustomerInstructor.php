<?php

namespace App\Filament\Resources\CustomerInstructorResource\Pages;

use App\Filament\Resources\CustomerInstructorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerInstructor extends EditRecord
{
    protected static string $resource = CustomerInstructorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
