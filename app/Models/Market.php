<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name',
        'price',
        'desc'
    ];

    public function task()  {
        return $this->belongsTo(Shipment::class, 'shipping_id');
    }
}
