<?php

namespace App\Models;

use App\Models\Calculadora_aerea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aerea_precio extends Model
{
    use HasFactory;
    protected $fillable = [
        'aerea_id','min','max','precio'
     ]; 
     public function rangos()
     {
         return $this->belongsTo(Calculadora_aerea::class);
     }
}
