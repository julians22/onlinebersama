<?php

namespace App\Filament\Widgets;

use Filament\Widgets\AccountWidget as BaseAccountWidget;

class AccountWidgetDashboard extends BaseAccountWidget
{
    protected int | string | array $columnSpan = 'full';

    protected string $view = 'filament-panels::widgets.account-widget';
}
