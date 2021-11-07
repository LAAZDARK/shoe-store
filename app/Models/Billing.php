<?php

namespace App\Models;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billing extends Model
{
    use HasFactory;

    CONST STATUS_TRUE = 'True';
    CONST STATUS_FALSE = 'False';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'address',
        'rfc',
        'phone',
        'status',
        'comments',
        'user_id'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function purchases () {

        return $this->hasMany(Purchase::class, 'billing_id');
    }


}
