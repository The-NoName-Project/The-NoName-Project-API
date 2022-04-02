<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailSales extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cantidad',
        'subtotal',
        'sales_id',
        'products_id',
    ];
}
