<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $dates = ['tanggal_lahir'];

    protected $fillable =[
        'nama',
        'nik',
        'jenis_kelamin',
        'pekerjaan_id',
        'level_pendidikan_id',
        'Kewarganegaraan_id',
        'agama',
        'status_keluarga',
        'status_pernikahan',
        'tempat_lahir',
        'tanggal_lahir',
        'ayah',
        'ibu',
        'keluarga_id'
    ];

    public function keluarga(){
        return $this->belongsTo(KartuKeluarga::class, 'keluarga_id', 'id');
    }

    public function levelPendidikan(){
        return $this->belongsTo(LevelPendidikan::class);
    }

    public function kewarganegaraan(){
        return $this->belongsTo(Kewarganegaraan::class);
    }

    public function pekerjaan(){
        return $this->belongsTo(Pekerjaan::class);
    }

    public static function scopeProductive($query){
        return $query->whereBetween('tanggal_lahir', [now()->subYear(64) ,now()->subYear(15)]);
    }


    public $timestamps = false;
}
