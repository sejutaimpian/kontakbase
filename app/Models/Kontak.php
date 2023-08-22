<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak';
    protected $fillable = ['kontak_room_id', 'nama_depan', 'nama_belakang', 'nomor_telepon'];

    public function kontakRoom()
    {
        return $this->belongsTo(KontakRoom::class);
    }
}
