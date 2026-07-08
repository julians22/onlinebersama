<?php

namespace App\View\Components\Displays;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardInside extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $route,
        public string $image,
        public ?string $dataAnalytics,
        public ?string $alt,
        public ?string $position = 'top',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.displays.card-inside');
    }
}
