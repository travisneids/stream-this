<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    protected $table = 'customers';

    protected $fillable = [
        'email',
        'name',
        'street',
        'street_2',
        'city',
        'state',
        'zip',
        'phone'
    ];

    public function movies()
    {
        return $this->belongsToMany('App\Movie');
    }

    

}
