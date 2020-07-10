<?php

namespace App\Repositories\Frontend\Post;

use App\Models\Post\Post;
use App\Models\Post\PostMeta;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Auth;

class PostRepository extends BaseRepository
{

	public function __construct()
	{
		parent::__construct();
	}

	public function model()
	{
		return Post::class;
	}


	public function recents($paged = 3) {
		return $this->model->with('postmeta', 'taxonomies')->published()->orderBy('updated_at','desc')->limit(3)->get();
		
	}

	public function getPostByType($type) {
		return Post::where('type', '=', $type)->get();
	}

}
