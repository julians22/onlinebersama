<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ResourcesList extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::published()->latest()->paginate(6);

        return view('livewire.resources-list', [
            'posts' => $posts
        ]);
    }
}
