<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CekAnabul extends Model
{
    use HasFactory;
    protected $table = 'cek_anabul';
    protected $primaryKey = 'id_cek';
    protected $guarded = [];
    public $timestamps = false;
}
