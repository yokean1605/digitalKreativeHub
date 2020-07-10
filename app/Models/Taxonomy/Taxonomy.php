<?php

namespace App\Models\Taxonomy;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    protected $table = 'taxonomy';

    protected $fillable = ['term_id', 'taxonomy', 'description', 'parent'];

    public function terms()
    {
    	return $this->belongsTo('App\Models\Term\Term', 'term_id');
    }
}
