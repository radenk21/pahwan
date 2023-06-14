<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar_Jawaban extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'Gambar_Jawabans';

    public function jawaban()
    {
        return $this->belongsTo(Jawaban::class);
    }
}