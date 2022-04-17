<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class PropertyType extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];
}