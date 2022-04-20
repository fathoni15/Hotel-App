<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivities extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'log',
        'executor_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'executor_id', 'id');
    }
}
