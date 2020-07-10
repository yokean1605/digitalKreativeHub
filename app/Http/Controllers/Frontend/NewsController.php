<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting\AppSetting;
use App\Models\Post\Post;

/**
 * Class HomeController.
 */
class NewsController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function index($slug= '')
    {
    	$setting = AppSetting::all()->keyBy('setting_key');
    	$setting = $setting->pluck('setting_value','setting_key');

    	$post = Post::where('slug', $slug)->published()->firstOrfail();

        return view('frontend.layouts.single-page', compact('setting', 'post'));
    }
}
