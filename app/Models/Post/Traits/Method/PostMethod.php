<?php

namespace App\Models\Post\Traits\Method;

trait PostMethod
{
    public function excerpt($words = '', $end = '')
    {
    	$words = ($words) ? $words : config('post.excerpt.words_length');
    	$end = ($end) ? $end : config('post.excerpt.words_end');
    	
        return \Illuminate\Support\Str::words(strip_tags($this->content), $words, $end);
    }

}