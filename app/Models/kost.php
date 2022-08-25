<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kost extends Model
{
    protected $table = 'kost';
    protected $primaryKey = 'id_kost';
    public $timestamps = false;
    protected $fillable = array('id_kost','nama_kost','harga_kamar','alamat','telp','deskripsi');

}
