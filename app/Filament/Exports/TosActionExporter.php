<?php

namespace App\Filament\Exports;

use App\Models\TosAction;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Support\Number;

class TosActionExporter extends Exporter
{
    protected static ?string $model = TosAction::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('ip_address'),
            ExportColumn::make('status'),
            ExportColumn::make('accepted_at'),
            ExportColumn::make('created_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your tos action export has completed and ' . Number::format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }

    // Force processing in a single request instead of chunked background jobs
    public function getChunkSize(): ?int
    {
        return null;
    }

    public function getJobBatchSize(): ?int
    {
        return null;
    }

    public function getJobQueue(): ?string
    {
        return null;
    }
}
