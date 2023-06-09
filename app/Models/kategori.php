<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = ('kategori');
    protected $primaryKey = ('id_kategori');
    protected $guarded= ['id_kategori'];
    protected $fillable = ['id_kategori', 'kategori_tahun'];

    public function barang(){
        return $this->hasMany(barang::class);
    }
}
