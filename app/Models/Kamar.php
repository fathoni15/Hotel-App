<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipe_kamar',
        'no_kamar',
        'status',
    ];

    public function tipe()
    {
        return $this->belongsTo(TipeKamar::class, 'tipe_kamar', 'id');
    }
}
