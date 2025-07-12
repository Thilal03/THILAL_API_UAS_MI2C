<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    protected $table = 'perpuss';
    protected $primaryKey = 'no';
    public $incrementing = true;
    protected $fillable = [
         'nama', 'alamat', 'no_telepon', 'tipe', 'latitude','longitude'
    ];
}
