<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontakRoom extends Model
{
    use HasFactory;

    protected $table = 'kontak_room';
    protected $fillable = ['kode_kontak', 'judul', 'keterangan'];
}
