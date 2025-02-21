<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang',
        'harga',
        'overview',
        'foto_path',
    ];
}
