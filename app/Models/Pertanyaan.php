<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function gambar_pertanyaan()
    {
        return $this->hasMany(Gambar_Pertanyaan::class);
    }

    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function report_pertanyaan()
    {
        return $this->hasMany(Report_Pertanyaan::class);
    }
}