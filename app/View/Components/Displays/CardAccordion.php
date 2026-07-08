<?php

namespace App\View\Components\Displays;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardAccordion extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $slug,
        public string $videoId,
        public string $image,
        public ?string $alt,
        public ?string $dataAnalytics
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.displays.card-accordion');
    }
}
