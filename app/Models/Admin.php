<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
       'nama',
       'alamat',
       'notelepon',
       'email',
       'password',
       'slug_link', 
       'status_aktif', 
       'created_at',
       'updated_at',
    ];
}
