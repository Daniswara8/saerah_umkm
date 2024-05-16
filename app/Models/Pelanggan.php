<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'kontak',
        'alamat',
        'status_publish',
        'status_aktif',
        'created_by',
        'updated_by',
        'deleted_by',
        'slug_link',
        'created_at',
        'updated_at',
    ];
}
