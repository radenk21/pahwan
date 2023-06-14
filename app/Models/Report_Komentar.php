<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_Komentar extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'Report_Komentars';

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function komentar()
    {
        return $this->belongsTo(Komentar::class);
    }
}