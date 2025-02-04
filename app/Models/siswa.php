<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nim',
        'name',
        'kelas_id',
    ];
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}
