<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['nama'];

    public function siswa() {
        return $this->hasMany('App\Siswa');
    }

    public function paket_soal() {
        return $this->hasMany('App\PaketSoal');
    }
}
