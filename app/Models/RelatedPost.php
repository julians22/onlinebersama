<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RelatedPost extends Model
{
    protected $table = 'related_posts';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sort_order', 'post_id', 'related_post_id'];

    // Relasi balik ke Post agar Select di dalam Repeater bisa mencari datanya
    public function relatedPost(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'related_post_id');
    }
}
