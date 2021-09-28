<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billing extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'quatity',
        'total',
        'status',
        'methodOfPayment',
        'billing_product_id',
        'user_id'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function products () {

        return $this->belongsTo(Product::class);
    }

}
