<?php

namespace App\Models\Post\Traits\Attribute;

trait PostMetaAttribute
{
	public function getThumbnailAttribute()
	{
		return $this->getThumbnail();
	}
}