<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function pengguna()
    {
        return $this->BelongsTo(Pengguna::class);
    }

    public function jawaban()
    {
        return $this->BelongsTo(Jawaban::class);
    }
}