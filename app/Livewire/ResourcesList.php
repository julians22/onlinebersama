<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ResourcesList extends Component
{
    use WithPagination;

    public int $paginate = 6;

    public function updatePaginate($paginate)
    {
        $this->paginate = $paginate;
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::published()
            ->latest()
            ->with('category')
            ->paginate($this->paginate);

        return view('livewire.resources-list', [
            'posts' => $posts
        ]);
    }
}
