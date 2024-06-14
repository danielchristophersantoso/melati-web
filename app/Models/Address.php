<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'addresses';

    protected $primaryKey = 'addressID';

    protected $keyType = 'string';

    protected $guarded = ['addressID'];

    protected $fillable = [
        'userID',
        'province',
        'cityOrRegency',
        'nameAddress',
        'detailAddress',
    ];

    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'addressID', 'addressID');
    }
}
