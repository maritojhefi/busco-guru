<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    const ADMIN=1;
    const CLIENTE=2;

   protected $fillable = [
        'nombre','descripcion'
     ];
}
