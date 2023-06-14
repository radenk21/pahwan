<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report_Pertanyaan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'Report_Pertanyaans';

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }
}