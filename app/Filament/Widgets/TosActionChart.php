<?php

namespace App\Filament\Widgets;

use App\Models\TosAction;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class TosActionChart extends ChartWidget
{

    protected ?string $heading = 'Tos Action Chart';

    protected int | string | array $columnSpan = 'full';

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Today',
            'week' => 'Last week',
            'month' => 'Last month',
            'year' => 'This year',
            'last_year' => 'Last Year'
        ];
    }

    protected function getData(): array
    {
        $activeFilter = $this->filter;

        if ($activeFilter === 'today') {
            $data = $this->getHourlyData();
        } else if ($activeFilter === 'week') {
            $data = $this->getDailyData('week');
        } else if ($activeFilter === 'month') {
            $data = $this->getDailyData('month');
        } else if ($activeFilter == 'year')
            $data = $this->getMontlyData();
        else if ($activeFilter == 'last_year') {
            $data = $this->getMontlyData('last');
        }else {
            $data = $this->getMontlyData();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Tos Actions',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getHourlyData() {

        $now = Carbon::now();

        $data = Trend::model(TosAction::class)
            ->between(
                start: $now->copy()->startOfHour(),
                end: $now->copy()->endOfHour(),
            )
            ->perHour()
            ->count();

        return $data;

    }

    private function getDailyData(string $when = 'week') {
        $now = Carbon::now();

        if ($when === 'week') {
            $startDate = $now->copy()->subWeek()->startOfWeek();
            $endDate = $now->copy()->subWeek()->endOfWeek();
        } else {
            $startDate = $now->copy()->subMonth()->startOfMonth();
            $endDate = $now->copy()->subMonth()->endOfMonth();
        }

        $data = Trend::model(TosAction::class)
            ->between(
                start: $startDate,
                end: $endDate,
            )
            ->perDay()
            ->count();

        return $data;
    }

    private function getMontlyData(string $when = 'this')
    {
        $now = Carbon::now();

        if ($when === 'last') {
            $startDate = $now->copy()->subYear()->startOfYear();
            $endDate = $now->copy()->subYear()->endOfYear();
        } else {
            $startDate = $now->copy()->startOfYear();
            $endDate = $now->copy()->endOfYear();
        }

        $data = Trend::model(TosAction::class)
            ->between(
                start: $startDate,
                end: $endDate,
            )
            ->perMonth()
            ->count();

        return $data;
    }
}
