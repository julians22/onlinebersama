<?php

namespace App\View\Components\Articles;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RelatedArticle extends Component
{
    public string $data_analytics_button;
    public string $text_button;
    public string $as = 'a';
    public array $extra_attributes = [];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public object $data
    ) {
        $this->clickableAs();
    }

    protected function clickableAs(): void
    {
        switch ($this->data->type) {
            case Post::TYPE_ARTICLE:
                $this->as = 'a';
                $this->text_button = 'Baca Selengkapnya';
                $this->data_analytics_button = 'Read More';
                $this->extra_attributes['href'] = route('resources.handle_second_route', $this->data->route_tools);
                break;

            case Post::TYPE_VIDEO:
                $this->as = 'button';
                $this->text_button = 'Tonton Sekarang';
                $this->data_analytics_button = 'Watch Now';
                $this->extra_attributes['type'] = 'button';
                $this->extra_attributes['@click'] = "\$store.videoModal.openModal('" . ($this->data->video_id ?? config('onlinebersama.default_video_id')) . "')";
                break;

            case Post::TYPE_EBOOK:
                $this->as = 'a';
                $this->text_button = 'Download';
                $this->data_analytics_button = 'Download';
                $this->extra_attributes['href'] = $this->data->ebook_url;
                $this->extra_attributes['target'] = '_blank';
                $this->extra_attributes['rel'] = 'noopener';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.related-article', [
            'data' => $this->data
        ]);
    }
}
