<?php

namespace App\View\Components\Displays;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardStack extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $number,
        public string $title,
        public string $image,
        public ?string $dataAnalytics,
        public ?string $alt
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.displays.card-stack');
    }
}
