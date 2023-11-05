<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'course_name',
        'user_id',
        'amount',
        'transaction_code',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
