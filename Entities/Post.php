<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use WebReinvent\LvTags\Traits\HasTags;

class Post extends Model
{
    use SoftDeletes;
    use HasTags;

    //-------------------------------------------------
    protected $table = 'blog_posts';
    //-------------------------------------------------
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];
    //-------------------------------------------------
    protected $dateFormat = 'Y-m-d H:i:s';
    //-------------------------------------------------

    protected $fillable = [
        'title', 'slug', 'details',
        'created_by', 'updated_by', 'deleted_by'
    ];
    //-------------------------------------------------

    //-------------------------------------------------
    //-------------------------------------------------
    public function setSlugAttribute()
    {
        $this->attributes['slug'] = str_slug($this->title);
    }
    //-------------------------------------------------

    //-------------------------------------------------
}
