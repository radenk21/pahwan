<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',
    ];

    public function arsip()
    {
        return $this->hasMany(Arsip::class);
    }
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }

    public function like()
    {
        return $this->hasMany(Like_Jawaban::class);
    }

    public function follow()
    {
        return $this->hasMany(Pengguna_Follow::class);
    }

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }

    public function report_jawaban()
    {
        return $this->hasMany(Report_Jawaban::class);
    }
    public function report_pertanyaan()
    {
        return $this->hasMany(Report_Pertanyaan::class);
    }
    public function report_komentar()
    {
        return $this->hasMany(Report_Komentar::class);
    }
}