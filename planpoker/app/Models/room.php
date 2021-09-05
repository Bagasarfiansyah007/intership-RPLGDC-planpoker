<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class room extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'roomCode',
        'namaRoom',
        'time',
        'created_at',
        'updated_at',
        'user_id'
    ];
}
