<?php

/**
 * @Author: zent
 * @Date:   2018-05-09 16:30:46
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 12:06:14
 */

namespace App\Http\Controllers\Backend\Post;

use App\Models\Post\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Backend\Post\PostRepository;

class PostController extends Controller
{

    /**
     * PostController constructor.
     *
     * @param PostRepository $postRepository
     */
    protected $postRepository;

    
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $limit = ($request->limit && in_array($request->limit, config('setting.perpage'))) ? $request->limit : config('setting.limitpage');

        $posts = $this->postRepository->paginate($limit);
    	return view('backend.post.index', compact('posts', 'limit', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->postRepository->create($request->only(
            'title',
            'slug',
            'content',
            'status',
            'thumbnail'
        ));

        return redirect()->route('admin.post.index')->withFlashSuccess(__('alerts.backend.general.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // return view('backend.post.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('backend.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->postRepository->update($post, $request->only(
            'title',
            'slug',
            'content',
            'status',
            'thumbnail'
        ));

        return redirect()->route('admin.post.index')->withFlashSuccess(__('alerts.backend.general.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.post.index')->withFlashSuccess(__('alerts.backend.general.deleted'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {
                $image = $request->file->store(config('storage.images.post.thumbnail.store_path'));
                $path = config('storage.images.post.thumbnail.url_path') . $request->file->hashName();
                $filename = $request->file->hashName();
            }

            return response()->json(['status' => true, 'path' => $path, 'filename' => $filename]);
        }
    }
}
