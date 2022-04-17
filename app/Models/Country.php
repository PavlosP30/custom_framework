<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Country extends Eloquent
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