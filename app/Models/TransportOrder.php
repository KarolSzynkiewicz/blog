<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportOrder extends Model
{
    protected $fillable = [
        'client', 'reference_number', 'price', 'currency', 'truck', 'loading_date', 'unloading_date', 'loading_address', 'unloading_address'
    ];
    use HasFactory;


}
