<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public static function precioAlto()
    {
    	return static::where('precio','>',20)->orderBy('descripcion','desc')->get();
    }

    public static function existencia()
    {
    	return static::where('existencia',1)->get();
    }    
}
