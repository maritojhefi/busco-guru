<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Arr;
use App\Models\Aerea_precio;
use App\Models\Calculadora_aerea;

class CalculadoraAerea extends Component
{
    public $min;
    public $max;
    public $precio;
   
 
    protected $rules = [
        'min' => 'required|unique:aerea_precios,min|unique:aerea_precios,max|lt:max',
        'max' => 'required|unique:aerea_precios,min|unique:aerea_precios,max',
        'precio'=>'required|numeric',
        
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function guardarRegistro()
    {
        
        $validatedData = $this->validate();
        $validatedData = Arr::add($validatedData, 'aerea_id', '1');
        $ultimoRegistro=Aerea_precio::latest()->first();
        if($validatedData['min']>$ultimoRegistro->max)
        {
            Aerea_precio::create($validatedData);
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Nueva regla creada!"
            ]);
            $this->reset(['min','max','precio']);
        }
        else
        {
            $this->dispatchBrowserEvent('alert',[
                'type'=>'warning',
                'message'=>"Error en los datos ingresados!"
            ]);
        }
       
    }
    public function borrarUltimo($id){
        $item=Aerea_precio::find($id);
        $item->delete();
    }
    public function render()
    {
        $variables=Calculadora_aerea::find(1);
        return view('livewire.calculadora-aerea',compact('variables'));
    }
}
