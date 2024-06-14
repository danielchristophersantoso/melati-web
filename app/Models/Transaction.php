<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory,HasUuids;

    protected $primaryKey = 'transactionID';

    protected $keyType = 'string';

    protected $fillable = [
        'transactionID',
        'userID',
        'addressID',
        'statusID',
        'voucherID',
        'totalWeight',
        'shippingPrice',
        'paymentMethod',
        'paymentStatus',
        'shippingFee',
        'totalPrice',
    ];

    public $incrementing = 'false';

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'addressID', 'addressID');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'statusID', 'statusID');
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class, 'voucherID', 'voucherID');
    }

    public function transactionDetail()
    {
        return $this->hasMany(TransactionDetail::class, 'transactionID', 'transactionID');
    }
}