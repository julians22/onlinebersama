<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasSlug;

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';

    const TYPE_ARTICLE = 'article';
    const TYPE_VIDEO = 'video';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'type', 'status', 'read_time', 'template_view_path', 'meta_title', 'meta_description', 'meta_keywords', 'writer', 'related_slug', 'published_at'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->doNotGenerateSlugsOnUpdate()
            ->saveSlugsTo('slug');
    }

    public function relatedOneArticle()
    {
        return $this->hasOne(Post::class, 'slug', 'related_slug');
    }

    // 1. Relasi BelongsToMany (digunakan untuk memanggil data di Frontend)
    public function topics()
    {
        return $this->belongsToMany(Topic::class)
                    ->withPivot('sort_order')
                    ->orderByPivot('sort_order');
    }

    public function relatedArticles()
    {
        return $this->belongsToMany(Post::class, 'related_posts', 'post_id', 'related_post_id')
                    ->withPivot('sort_order')
                    ->orderByPivot('sort_order');
    }

    // 2. Relasi HasMany ke Pivot (DIGUNAKAN UNTUK FORM FILAMENT)
    public function pivotTopics()
    {
        return $this->hasMany(PostTopic::class);
    }

    public function pivotRelatedPosts()
    {
        return $this->hasMany(RelatedPost::class, 'post_id');
    }

    public function isCustomTemplate()
    {
        return $this->template_view_path != 'default';
    }

    /**
     * Scope a query to only include Published
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('status', self::STATUS_PUBLISHED);
    }

    public function isPublished()
    {
        return $this->status === self::STATUS_PUBLISHED;
    }
}
