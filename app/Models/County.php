<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class County extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}