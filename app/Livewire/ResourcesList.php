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

    #[Url(as: 'topic', history: true)]
    public string|null $selectedTopic = null;

    public array $topics = [];

    public function mount()
    {
        if (request()->has('topic')) {
            $this->selectedTopic = request()->query('topic');
        }
    }

    #[Computed()]
    public function selectedTopicLabel()
    {
        if ($this->selectedTopic === null) {
            return 'Semua Topik';
        }

        return collect($this->topics)->firstWhere('slug', $this->selectedTopic)['name'] ?? 'Semua Topik';
    }

    public function updatePaginate(int $paginate)
    {
        $this->paginate = $paginate;
        $this->resetPage();
    }

    public function setTopic(string $topic)
    {
        $this->selectedTopic = $topic;
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::published()
            ->latest()
            ->with('topics')
            ->when($this->selectedTopic !== null, function ($query) {
                return $query->whereHas('topics', function ($query) {
                    $query->where('slug', $this->selectedTopic);
                });
            })
            ->paginate($this->paginate);

        return view('livewire.resources-list', [
            'posts' => $posts,
            'selectedTopicLabel' => $this->selectedTopicLabel(),
        ]);
    }
}
