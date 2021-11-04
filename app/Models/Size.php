<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public $table = "sizes";

    protected $fillable = [
        'title'
    ];

}
