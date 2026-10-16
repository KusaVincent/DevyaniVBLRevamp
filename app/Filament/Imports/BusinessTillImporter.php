<?php

declare(strict_types=1);

namespace App\Filament\Imports;

use App\Models\BusinessProfile;
use App\Models\BusinessTill;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Override;

class BusinessTillImporter extends Importer
{
    #[Override]
    protected static ?string $model = BusinessTill::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('businessProfile')
                ->relationship(resolveUsing: fn (string $state): ?BusinessProfile => BusinessProfile::where('business_short_code', mb_trim($state))->first())
                ->label('Business Short Code')
                ->requiredMapping(),

            ImportColumn::make('till')
                ->label('Till Number')
                ->requiredMapping()
                ->rules(['required', 'string', 'max:255']),

            ImportColumn::make('cust_code')
                ->label('Customer Code')
                ->rules(['nullable', 'string', 'max:255']),

            ImportColumn::make('for')
                ->label('For')
                ->rules(['nullable', 'string', 'max:255']),

            ImportColumn::make('additional_details')
                ->label('Additional Details')
                ->rules(['nullable', 'string']),
        ];
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your business till import has completed and '
            .number_format($import->successful_rows).' '
            .str('row')->plural($import->successful_rows).' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' '.number_format($failedRowsCount).' '.str('row')->plural($failedRowsCount).' failed to import.';
        }

        return $body;
    }

    public function resolveRecord(): ?BusinessTill
    {
        return BusinessTill::firstOrNew([
            'till' => $this->data['till'],
        ]);
    }
}
