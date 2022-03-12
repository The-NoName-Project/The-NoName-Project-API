<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_articles',
        'total_price',
        'subtotal',
        'cliente_id',
        'vendedor_id',
    ];
}
