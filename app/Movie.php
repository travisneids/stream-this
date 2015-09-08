<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'description',
        'release_date',
        'image',
        'rating',
        'total',
        'price'
    ];

    /**
     * @param int $price
     * @return string
     */
    public function getPriceAttribute($price)
    {
        return '$' . number_format($price) / 100;
    }

    /**
     * Set the movie's price
     * 
     * @param string $price 
     * @return  int
     */
    public function setPriceAttribute($price)
    {
        $this->attributes['price'] = str_replace('$', '', $price) * 100;
    }

    /**
     * Return release date propery formatted
     * @param  string $date
     * @return string
     */
    public function getReleaseDateAttribute($date)
    {
        return date('m/d/Y', strtotime($date));
    }

}