<?php

namespace App\Models\Post\Traits\Attribute;
use File;
use Illuminate\Support\Str;
trait PostAttribute
{

    // ref: https://stackoverflow.com/questions/37692482/laravel-how-to-add-a-custom-function-in-an-eloquent-model
    public function getTemplateAttribute() {
        $templateDir = File::files(base_path('resources/views/tamplates'));
        $templateList = [];
        foreach ($templateDir as $key => $temp) {
            $filename = basename($temp->getPathname());
            $templateList[] = ucwords(str_replace('_', ' ', substr($filename, 0, strpos($filename, ".")) ));
        }
        return $templateList;
    }

    public function getAuthorLinkAttribute()
    {
    	return '<a href="'.route('admin.auth.user.show', $this->user).'">'.$this->user->full_name.'</a>';
    }

    public function getTitleLinkAttribute()
    {
        if ($this->status == 'publish') {
            return '<a href="' . route('frontend.news.index', $this->slug) . '">' . $this->title . '</a>';
        }
        $status = collect(config('post.status'))->filter(function($value) {
            return $value['name'] == $this->status;
        })->first();

        return $this->title . ' - '. $status['label'];
    }

    public function getPreviewAttribute()
    {
        if ($this->status != 'publish') {
            return '<a href="' . route('frontend.preview.index', $this->slug) . '">Show Preview</a>';
        } 

        return '<a href="' . route('frontend.news.index', $this->slug) . '">Show Preview</a>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.post.edit', $this).'" class="btn btn-primary"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        return '<a href="'.route('admin.post.destroy', $this).'"
			 data-method="delete"
			 data-trans-button-cancel="'.__('buttons.general.cancel').'"
			 data-trans-button-confirm="'.__('buttons.general.crud.delete').'"
			 data-trans-title="'.__('strings.backend.general.are_you_sure').'"
			 class="btn btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.delete').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {

        return '<div class="btn-group btn-group-sm" role="group" aria-label="User Actions">
			  '.$this->edit_button.'
			  '.$this->delete_button.'
			</div>';
    }

    public function getThumbnailAttribute()
    {
        if(!empty($this->postmeta->keyBy('meta_key')['thumbnail']->meta_value)) {
            return url(config('storage.images.post.thumbnail.url_path').$this->postmeta->keyBy('meta_key')['thumbnail']->meta_value);
        } else {
            return 'http://digitalkreativ.azarenka.org/images/blog.jpg';
        }
    }

    public function getExcerptAttribute()
    {
        return $this->excerpt();
    }
}