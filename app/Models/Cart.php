<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'productID',
        'quantity',
    ];

    public function user ()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID', 'productID');
    }
}
