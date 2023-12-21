<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'photo',
        'name',
        'price',
        'desc',
        'shipment'
    ];

    public function Market()  {
        return $this->hasMany(Market::class, 'shipping_id');
    }
}
