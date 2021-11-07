<?php

namespace App\Models;


use App\Models\User;
use App\Models\Billing;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $table = "purchase";

    CONST STATUS_SOLD = 'Sold';
    CONST STATUS_CART = 'Cart';

    protected $fillable = [
        'status',
        'productName',
        'price',
        'size',
        'product_id',
        'user_id',
        'billing_id'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function billing ()
    {
        return $this->belongsTo(Billing::class, 'billing_id');
    }



}
