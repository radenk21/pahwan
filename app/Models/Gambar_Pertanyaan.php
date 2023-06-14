<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar_Pertanyaan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'Gambar_Pertanyaans';

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }
}