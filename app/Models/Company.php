<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'country', 'post_code', 'City', 'Street', 'building_number', 'Invoice_prefix'
    ];
}
