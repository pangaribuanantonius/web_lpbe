<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    use HasFactory;
    protected $table = 'tabel_aplikasi';
    protected $guarded = [];
    public $incrementing = false;
    public function aplikasi(){
        return $this->belongsTo(Instansi::class, 'instansi_id', 'id');
    }
}
