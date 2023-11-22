<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\comments;
use App\Models\Keyword;


class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'cover_image',
        'title',
        'slug',
        'body',
        'meta_description',
        'published_at',
        'featured',
        'author_id',
        'category_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id')->withDefault('John Doe');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }



    public function comments(): HasMany
    {
        return $this->hasMany(comments::class,'post_id');
    }
    public function keywords(): BelongsToMany
    {
        return $this->belongsToMany(Keyword::class, 'post_keyword');
    }
    public static function searchPost($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%' . $search . '%')
            ->orWhere('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
    }

    // هاد سكوب يستخدم بالاستعلامات بيرجع البوست الي فيتو هك
    // كيف بتناديلو متل اي تابعع اسمو كاتيغةري
    // $post::Category()

    public function scopeCategory(Builder $query, string $category): Builder
    {
        return $query->where('category_id', $category);
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('featured', true);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', new \DateTime());
    }

    public function scopeRecentAsc(Builder $query): Builder
    {
        return $query->orderBy('title', 'asc');
    }

    public function scopeRecentDesc(Builder $query): Builder
    {
        return $query->orderBy('title', 'desc');
    }
}
