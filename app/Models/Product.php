<?php

namespace App\Models;

use App\Models\Billing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    CONST STATUS_FALSE = false;
    CONST STATUS_TRUE = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'quatity',
        'status',
        'image',
        'category',
        'brand',
        'model',
        'type',
        'admin_id'
    ];


    public function billings () {

        return $this->belongsToMany(Billing::class);
    }
}
