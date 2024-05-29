<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $fillable = [
        'foto_produk',
        'nama_produk',
        'deskripsi_produk',
        'ukuran_produk',
        'motif_produk',
        'harga_produk',
        'jumlah_produk',
        'Slug_link',
    ];
}

