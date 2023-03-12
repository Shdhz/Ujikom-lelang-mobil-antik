<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = ('barang');
    protected $primaryKey = ('id_barang');
    protected $fillable = ['id_barang' ,'nama', 'harga_awal', 'id_kategori', 'deskripsi', 'foto', 'status_lelang'];
    
    public function kategori(){
        return $this->belongsTo(kategori::class, 'id_kategori', 'id_kategori');
    }

    public function lelang(){
        return $this->hasMany(lelang::class, 'id_barang');
    }
}
