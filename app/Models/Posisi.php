<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    use HasFactory;

    public function karyawans() {
        return $this->hasMany(Karyawan::class, 'id', 'posisi_id');
    }

    protected $fillable = [
        'posisi_name'
    ];
    // protected $table = 'posisis';
    // protected $primaryKey = 'id';
}
