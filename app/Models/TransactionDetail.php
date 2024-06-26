<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Thiagoprz\CompositeKey\HasCompositeKey;

class TransactionDetail extends Model
{
    use HasFactory,HasUuids,HasCompositeKey, SoftDeletes;

    protected $table = 'transaction_details';

    protected $primaryKey = ['transactionID', 'productID'];

    protected $keyType = 'string';

    protected $fillable = [
        'transactionID',
        'productID',
        'sizeID',
        'quantity',
        'price',
        'weight',
    ];

    public $incrementing = false;

    public function getKeyName()
    {
        return ['transactionID','productID'];
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactionID', 'transactionID');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID', 'productID');
    }
}
