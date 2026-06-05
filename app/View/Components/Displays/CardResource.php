<?php

namespace App\View\Components\Displays;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardResource extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $dataAnalytics,
        public ?string $image,
        public ?string $alt,
        public ?array $tags,
        public string $route
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.displays.card-resource');
    }
}
