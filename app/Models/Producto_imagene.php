<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto_imagene extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'imagen'
     ];
     public function producto()
     {
         return $this->belongsTo(Producto::class);
     }
}
