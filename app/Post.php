<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    use softDeletes;

    public $incrementing = false;

    // Do need fillable properties, I added protected $guarded = [] in the model class
    // protected $fillable = [
    //     'title', 'description', 'content', 'image', 'published_at', 'category_id'
    // ];

    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Check if post has a tag
     *
     * return bool
     */
    public function hasTag($tagId)
    {
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }
}
