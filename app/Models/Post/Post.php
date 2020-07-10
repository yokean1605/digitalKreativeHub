<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post\Traits\Attribute\PostAttribute;
use App\Models\Post\Traits\Method\PostMethod;
use App\Models\Post\Traits\Relationship\PostRelationship;
use App\Models\Post\Traits\Scope\PostScope;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use PostAttribute, PostMethod, PostRelationship, PostScope, SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['author', 'title', 'content', 'status', 'type', 'slug', 'comment_status', 'menu_order'];
	
	protected $dates = ['deleted_at'];


}
