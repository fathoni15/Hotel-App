<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'id_fasilitas',
        'info',
        'harga',
        'foto',
    ];

    public function available()
    {
        return $this->hasMany(Kamar::class, 'tipe_kamar', 'id', 'AND')->where('status','=','a');;
    }
}
