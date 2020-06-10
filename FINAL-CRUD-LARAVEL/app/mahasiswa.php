<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "mahasiswa";

    protected $fillable = ['nama','NIM','jenis_kelamin','id_dosen'];
}
