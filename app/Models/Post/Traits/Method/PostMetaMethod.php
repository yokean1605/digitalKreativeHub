<?php

namespace App\Models\Post\Traits\Method;

trait PostMetaMethod
{
	public function getThumbnail()
	{
		if ($this->meta_key == 'thumbnail') {
			return url(config('storage.images.post.thumbnail.url_path').$this->meta_value);
		} else {
			return false;
		}
	}
}