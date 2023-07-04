<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;
    protected $table = 'tabel_instansi';
    protected $guarded = [];
    public $incrementing = false;
     public function instansi(){
        return $this->hasMany(Aplikasi::class, 'id', 'instansi_id');
    }
}
