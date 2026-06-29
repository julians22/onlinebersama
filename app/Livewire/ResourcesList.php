<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ResourcesList extends Component
{
    use WithPagination;

    public int $paginate = 6;

    // Use an empty string or null instead of '*' to avoid strict matching bugs
    #[Url(as: 'topic', history: true)]
    public ?string $selectedTopic = '';

    public array $topics = [];

    #[Computed()]
    public function selectedTopicLabel()
    {
        // Check for empty string or null values
        if (empty($this->selectedTopic)) {
            return 'Semua Topik';
        }

        return collect($this->topics)->firstWhere('slug', $this->selectedTopic)['name'] ?? 'Semua Topik';
    }

    public function updatePaginate(int $paginate)
    {
        $this->paginate = $paginate;
        $this->resetPage();
    }

    public function setTopic(?string $topic = null)
    {
        $this->selectedTopic = $topic;
        $this->resetPage();
    }

    protected function queryPost()
    {
        return Post::published()
            ->with('topics');
    }

    public function render()
    {
        if (empty($this->selectedTopic)) {
            $posts = $this->queryPost()
                ->orderBy('type', 'desc')
                ->paginate($this->paginate);
        } else {
            $posts = $this->queryPost()
                ->orderBy('title', 'asc')
                ->when(!empty($this->selectedTopic), function ($query) { // Check if topic is not empty
                    return $query->whereHas('topics', function ($query) {
                        $query->where('slug', $this->selectedTopic);
                    });
                })
                ->paginate($this->paginate);
        }

        return view('livewire.resources-list', [
            'posts' => $posts,
            'selectedTopicLabel' => $this->selectedTopicLabel(),
        ]);
    }
}
