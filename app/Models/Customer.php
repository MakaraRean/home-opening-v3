<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'khName',
        'enName',
        'rielCurrency',
        'usdCurrency',
        'address_id',
        'other'
    ];

    public function address() {
        return $this->belongsTo(Address::class,'address_id','id');
    }
}
