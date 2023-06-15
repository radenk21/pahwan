<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}