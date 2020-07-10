<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post\Traits\Attribute\PostMetaAttribute;
use App\Models\Post\Traits\Method\PostMetaMethod;

class PostMeta extends Model
{
	use PostMetaAttribute, PostMetaMethod;

    protected $table = 'postmeta';
    protected $fillable = ['post_id', 'meta_key', 'meta_value'];
}
