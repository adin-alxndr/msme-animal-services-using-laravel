<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grooming extends Model
{
    use HasFactory;
    protected $table = 'grooming';
    protected $primaryKey = 'id_grooming';
    public $timestamps = false;
    protected $guarded = [];
}
