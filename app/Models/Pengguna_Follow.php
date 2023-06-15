<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna_Follow extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'Pengguna_Follows';

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}