<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostTopic extends Model
{
    protected $table = 'post_topic';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sort_order', 'post_id', 'topic_id'];

    // Relasi balik ke Topic agar Select di dalam Repeater bisa mencari datanya
    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
