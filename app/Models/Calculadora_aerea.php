<?php

namespace App\Models;

use App\Models\Aerea_precio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Calculadora_aerea extends Model
{
    use HasFactory;
    protected $fillable = [
        'factor_medidas','flete1','seguro','iva'
     ]; 
     public function precio()
     {
         return $this->hasOne(Aerea_precio::class,'aerea_id');
     }
     public function precios(){
         return $this->hasMany(Aerea_precio::class,'aerea_id');
     }
}
