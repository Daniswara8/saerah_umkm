<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
       'created_at',
       'updated_at',
    ];
}
