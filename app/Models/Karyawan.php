<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    public function posisis() {
        return $this->belongsTo(Posisi::class, 'posisi_id', 'id');
    }

    // Yang boleh diisi
    protected $fillable = [
        'karyawan_name', 'no_telepon', 'alamat', 'status_pernikahan', 'posisi_id'
    ];
    // protected $table = 'karyawans';a
    // protected $primaryKey = 'id';
}
