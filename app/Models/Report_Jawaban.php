<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_Jawaban extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'Report_Jawabans';

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function jawaban()
    {
        return $this->belongsTo(Jawaban::class);
    }
}