<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $table = "purchase";

    CONST STATUS_SOLD = 'Sold';
    CONST STATUS_CART = 'Cart';

    protected $fillable = [
        'status',
        'price',
        'size',
        'product_id',
        'user_id'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

}
