<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Property extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'county_id',
        'country_id',
        'town_id',
        'description',
        'address',
        'image',
        'thumbnail',
        'latitude',
        'longitude',
        'num_bedrooms',
        'num_bathrooms',
        'price',
        'type',
        'property_type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    /**
     * Relation to Counties Table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function county()
    {
        return $this->belongsTo(County::class);
    }

    /**
     * Relation to Countries Table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Relation to Towns Table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function town()
    {
        return $this->belongsTo(Town::class);
    }

    /**
     * Relation to Property Types Table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function property_type()
    {
        return $this->belongsTo(PropertyType::class);
    }
}