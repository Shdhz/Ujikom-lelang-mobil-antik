<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\barang;
use App\Models\User;

class lelang extends Model
{
    use HasFactory;
    protected $table = ('lelang');
    protected $primaryKey = ('id_lelang');
    protected $fillable = [
        'id_lelang',
        'id_barang',
        'id',
        'harga_penawar',
        'status'
    ];

    public function barang(){
        return $this->belongsTo(barang::class, 'id_barang');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id');
    }
}
