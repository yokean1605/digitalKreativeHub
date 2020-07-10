<?php

namespace App\Http\Controllers\API\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\Post;

class PostController extends Controller
{
	public function slug(Request $request)
	{
		$post = Post::where('slug', $request->slug)->first();
		if (!$post) {
			return response()->json(['status' => true, 'message' => 'Slug is not exist', 'exist' => false, 'query' => $request->slug]);
		}
		return response()->json(['status' => true, 'message' => 'Slug is exist', 'exist' => true, 'query' => $request->slug]);
	}
}