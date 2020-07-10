<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting\AppSetting;
use App\Models\Post\Post;
use Auth;
/**
 * Class HomeController.
 */
class PreviewController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function index($slug= '')
    {
        $user = Auth::user();
        if (!$user) {
            abort(404);
        }

        

    	$setting = AppSetting::all()->keyBy('setting_key');
    	$setting = $setting->pluck('setting_value','setting_key');

    	$post = Post::where('slug', $slug)->published()->firstOrfail();

        return view('frontend.layouts.preview-single-page', compact('setting', 'post'));
    }
}
