<?php

namespace App\Models\Term;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';

    protected $fillable = ['name', 'slug'];
}
