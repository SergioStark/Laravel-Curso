<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/* Campos asignables */
    protected $fillable = ['title', 'body'];
}
