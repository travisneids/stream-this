<?php

namespace App\Http\Utilities;

class Tax
{

    protected static $state = .053;

    protected static $city = .017;

    protected static $local = .008;

    public static function all()
    {
        return static::$state + static::$city + static::$local;
    }

}