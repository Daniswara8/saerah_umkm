<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembayaran_id',
        'product_id',
        'quantity',
        'harga_produk',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }
}

