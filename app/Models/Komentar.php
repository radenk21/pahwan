<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function jawaban()
    {
        return $this->belongsTo(Jawaban::class);
    }

    public function report_komentar()
    {
        return $this->hasMany(Report_Komentar::class);
    }
}