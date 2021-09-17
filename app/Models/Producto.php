<?php

namespace App\Models;

use App\Models\Producto_imagene;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','precio','detalle'
     ];
     public function categorias()
     {
         return $this->belongsTo(Categoria::class);
     }
     public function image()
    {
        return $this->hasOne(Producto_Imagene::class);
    }
    public function images(){
        return $this->hasMany(Producto_Imagene::class);
    }
}
