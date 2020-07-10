<?php

namespace App\Models\Term;

use Illuminate\Database\Eloquent\Model;

class TermRelationship extends Model
{
    protected $table = 'term_relationships';

    protected $fillable = ['object_id', 'taxonomy_id', 'term_order'];
}
