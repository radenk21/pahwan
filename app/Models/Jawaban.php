<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function arsip()
    {
        return $this->hasMany(Arsip::class);
    }

    public function gambar_jawaban()
    {
        return $this->hasMany(Gambar_Jawaban::class);
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }

    public function like()
    {
        return $this->hasMany(Like_Jawaban::class);
    }
    public function report_jawaban()
    {
        return $this->hasMany(Report_Jawaban::class);
    }
}