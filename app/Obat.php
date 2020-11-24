<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Obat extends Model

{
    protected $table = "obat";
    protected $fillable = ['kode_obat','nama_obat','jenis_obat','harga_obat','stok_obat','pemasok_id'];

}
