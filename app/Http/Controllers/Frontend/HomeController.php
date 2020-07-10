<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting\AppSetting;
use App\Models\Post\Post;
use App\Repositories\Frontend\Post\PostRepository;
use Config;
/**
 * Class HomeController.
 */
class HomeController extends Controller
{
	protected $postRepository;

	public function __construct(PostRepository $postRepository)
	{
		$this->postRepository = $postRepository;	
	}

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
    	$posts = $this->postRepository->recents();

    	$setting = AppSetting::all();
    	$setting = $setting->pluck('setting_value','setting_key');
        return view('frontend.index', compact('setting', 'posts'));
    }
}
