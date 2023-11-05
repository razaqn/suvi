<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc','image','user_id'];

    public function mentor_user()
    {
        return $this->belongsTo(User::class);
    }
}
