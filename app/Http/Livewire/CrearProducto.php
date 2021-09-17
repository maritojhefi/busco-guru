<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;
use Livewire\WithFileUploads;

class CrearProducto extends Component
{
    use WithFileUploads;

    public $nombre;
    public $detalle;
    public $precio;
    public $foto;
    public $estado;
    public $stock;
    public $categoria;
   
    protected $rules = [
        'nombre' => 'required|min:6',
        'detalle' => 'required|min:6',
        'precio' => 'required|integer',
        'foto' => 'image|max:1024',
        'categoria'=>'required',
        'stock'=>'required|integer'
        
    ];
    
    protected $messages = [
        'nombre.required' => 'Debe contener al menos 6 caracteres.',
        'detalle.required' => 'Debe contener al menos 6 caracteres.',
        'precio.required' => 'Debe tener un precio.',
        'foto.max:1024' => 'La imagen debe pesar menos de 1 Mb',
        'categoria' => 'Seleccione una categoria.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
   
    public function submit()
    {
        
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        Producto::create([
            'nombre' => $this->nombre,
            'detalle' => $this->detalle,
            'precio' => $this->precio,
            'estado' => $this->estado,
            'stock' => $this->stock,
            'categoria_id' => $this->categoria,
        ]);
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Producto: ".$this->nombre." creado satisfactoriamente!!"
        ]);
        $this->reset();

    }
    public function render()
    {
        $categorias=Categoria::all();
        return view('livewire.crear-producto',compact('categorias'));
    }
}
