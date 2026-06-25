<?php

namespace App\View\Components\Displays;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardResource extends Component
{
    public string $rendered_tag;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $dataAnalytics,
        public ?string $image,
        public ?string $alt,
        public string $type,
        public string $route
    ) {
        switch ($type) {
            case 'article':
                $this->rendered_tag = 'Artikel';
                break;
            case 'video':
                $this->rendered_tag = 'Video';
                break;
            case 'ebook':
                $this->rendered_tag = 'E-Book';
                break;
            default:
                $this->rendered_tag = 'Artikel';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.displays.card-resource');
    }
}
