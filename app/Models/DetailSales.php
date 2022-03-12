<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSales extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'subtotal',
        'sales_id',
        'products_id',
    ];
}
