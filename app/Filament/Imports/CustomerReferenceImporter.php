<?php

namespace App\Filament\Imports;

use App\Models\CustomerReference;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class CustomerReferenceImporter extends Importer
{
    protected static ?string $model = CustomerReference::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('reference')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('mobile')
                ->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('name')
                ->requiredMapping()
                ->rules(['required']),
        ];
    }

    public function resolveRecord(): CustomerReference
    {
        return CustomerReference::firstOrNew([
            'reference' => $this->data['reference'],
        ]);
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your SMS Details import has completed and ' . Number::format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
