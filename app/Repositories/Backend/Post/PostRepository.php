<?php

namespace App\Repositories\Backend\Post;

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

	public function create(array $data) : Post
	{
		$userId = auth()->user()->id;
		return DB::transaction(function () use ($data, $userId) {
			$post = parent::create([
				'title' => $data['title'],
				'slug' => $data['slug'],
				'content' => $data['content'],
				'status' => $data['status'],
				'author' => $userId,
			]);

			if ($post) {

				if (isset($data['thumbnail'])) {
					$postmeta = new PostMeta([
						'meta_key' => 'thumbnail',
						'post_id' => $post->id,
						'meta_value' => $data['thumbnail']
					]);

					$post->postmeta()->save($postmeta);
				}

				// trigger event

				return $post;
			}

			throw new GeneralException(__('exceptions.backend.general.create_error'));
		});
	}

	public function update(Post $post, array $data)
	{
		$userId = auth()->user()->id;
		return DB::transaction(function () use ($post, $data, $userId) {
			$postupdate = $post->update([
				'title' => $data['title'],
				'slug' => $data['slug'],
				'content' => $data['content'],
				'status' => $data['status'],
				'author' => $userId,
			]);

			if ($postupdate) {

				if (isset($data['thumbnail'])) {
					$existThumbnail = PostMeta::where('meta_key', 'thumbnail')->where('post_id', $post->id)->first();
					if (!$existThumbnail) {

						$postmeta = new PostMeta([
							'meta_key' => 'thumbnail',
							'post_id' => $post->id,
							'meta_value' => $data['thumbnail']
						]);
						$post->postmeta()->save($postmeta);

					} else {
						
						$postmeta = $existThumbnail->where('post_id', $post->id)->update([
							'meta_key' => 'thumbnail',
							'post_id' => $post->id,
							'meta_value' => $data['thumbnail']
						]);
					}
				}

				// trigger event

				return $post;
			}

			throw new GeneralException(__('exceptions.backend.general.create_error'));
		});
	}

	public function singlepost($value, $key = 'id')
	{
		$post = Post::with('postmeta', 'taxonomies')->where($key, $value)->first();
		if ($post->postmeta) {
			// $post->thumbnail =  $post->postmeta[0]->meta_value;
		}

		return $post;
	}

	public function recents() {
		$posts = Post::with('postmeta', 'taxonomies')->orderBy('created_at','asc')->limit(5)->get();
		return $posts;
	}

	public function getPostByType($type) {
		return Post::where('type', '=', $type)->get();
	}

}
