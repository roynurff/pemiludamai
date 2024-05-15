<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;

class Pemilih extends AuthenticatableUser
{
    use HasFactory, Notifiable;

    protected $table = 'pemilih';

    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'agama',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
