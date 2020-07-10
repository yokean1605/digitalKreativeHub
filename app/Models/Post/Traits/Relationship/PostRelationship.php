<?php

namespace App\Models\Post\Traits\Relationship;

trait PostRelationship
{
    public function postmeta()
    {
        return $this->hasMany('App\Models\Post\PostMeta', 'post_id', 'id');
    }

    public function term_relationships()
    {
    	return $this->belongsToMany('App\Models\Taxonomy\Taxonomy', 'term_relationships', 'object_id', 'taxonomy_id');
    }

    public function taxonomies()
    {
        return $this->hasManyThrough(
            'App\Models\Taxonomy\Taxonomy', // taxonomy
            'App\Models\Term\TermRelationship', // termRelation
            'object_id', // Foreign key on termRelations table...
            'id', // Foreign key on taxonomys table...
            'id', // Local key on post table...
            'taxonomy_id' // Local key on termRelations table...
        );
    }

    public function user()
    {
    	return $this->belongsTO('App\Models\Auth\User', 'author');
    }
}