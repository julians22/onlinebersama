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

    #[Url(as: 'topic', except: '*', history: true)]
    public string $selectedTopic = '*';

    public array $topics = [];

    #[Computed()]
    public function selectedTopicLabel()
    {
        if ($this->selectedTopic === '*') {
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
            ->when($this->selectedTopic !== '*', function ($query) {
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
