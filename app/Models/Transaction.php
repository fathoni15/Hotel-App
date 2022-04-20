<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'id_kamar',
        'check_in',
        'check_out',
        'jumlah_kamar',
        'status',
        'bukti',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar', 'id');
    }

    public function pay()
    {
        return $this->belongsTo(Payment::class, 'id', 'transaction_id');
    }
}
