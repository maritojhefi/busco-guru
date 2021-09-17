<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;

class ListarProductos extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public $search = '';
    public $order='asc';
    public $paginate=10;

    protected $listeners = ['actualizar'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function actualizar(Producto $producto)
    {
        
        if($producto->estado=='activo')
        {
            $producto->estado='inactivo';
            $producto->save();
        }
        else{
            $producto->estado='activo';
            $producto->save();
        }
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"El producto ".$producto->nombre." cambio de estado!"
        ]);
        
    }
    
   
    public function render()
    {
        $productos=Producto::where('nombre','LIKE','%'.$this->search.'%')->orWhere('estado',$this->search)->orderBy('created_at',$this->order)->paginate($this->paginate);
        
        $total=$productos->total();
        
        return view('livewire.listar-productos',compact('productos','total'));
    }
}
