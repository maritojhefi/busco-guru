<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ShowProduct extends Component
{
    public $precios;
    public $ids;
    
    public function mount($id, $precio)
    {
        $this->precios = $precio;
        $this->ids = $id;
    }
    public function render()
    {
        $Bolivia=collect();
        $peticionDetalle1 = Http::withHeaders([
            'x-rapidapi-host' => 'magic-aliexpress1.p.rapidapi.com',
            'x-rapidapi-key' => 'e4c9d66817msh17a8b0befe401e2p10d15djsn84ce13f18ba6'
        ])->get('https://magic-aliexpress1.p.rapidapi.com/api/shipping/'.$this->ids, [
           
           'toCountry'=>'BO'
        ]);
       // dd(json_decode($peticionDetalle, true));
        $array1=json_decode($peticionDetalle1, true);
        foreach($array1['freightResult'] as $logistica1)  
        {
            $Bolivia->push([
                'destino'=>'Bolivia',
                'compania'=>$logistica1['company'],
                'precio'=>$logistica1['freightAmount']['formatedAmount'],
                'nombreServicio'=>$logistica1['serviceName'],
                'tiempoEstimado'=>$logistica1['time'],
                'paisOrigen'=>$logistica1['sendGoodsCountryFullName']
            ]);
        }

        $UnitedStates=collect();
        $peticionDetalle2 = Http::withHeaders([
            'x-rapidapi-host' => 'magic-aliexpress1.p.rapidapi.com',
            'x-rapidapi-key' => 'e4c9d66817msh17a8b0befe401e2p10d15djsn84ce13f18ba6'
        ])->get('https://magic-aliexpress1.p.rapidapi.com/api/shipping/'.$this->ids, [
           
           'toCountry'=>'US'
        ]);
       // dd(json_decode($peticionDetalle, true));
        $array2=json_decode($peticionDetalle2, true);
        foreach($array2['freightResult'] as $logistica2)  
        {
            $UnitedStates->push([
                'destino'=>'USA',
                'compania'=>$logistica2['company'],
                'precio'=>$logistica2['freightAmount']['formatedAmount'],
                'nombreServicio'=>$logistica2['serviceName'],
                'tiempoEstimado'=>$logistica2['time'],
                'paisOrigen'=>$logistica2['sendGoodsCountryFullName']
            ]);
        }


        $China=collect();
        $peticionDetalle3 = Http::withHeaders([
            'x-rapidapi-host' => 'magic-aliexpress1.p.rapidapi.com',
            'x-rapidapi-key' => 'e4c9d66817msh17a8b0befe401e2p10d15djsn84ce13f18ba6'
        ])->get('https://magic-aliexpress1.p.rapidapi.com/api/shipping/'.$this->ids, [
           
           'toCountry'=>'CN'
        ]);
       // dd(json_decode($peticionDetalle, true));
        $array3=json_decode($peticionDetalle3, true);
        foreach($array3['freightResult'] as $logistica3)  
        {
            $China->push([
                'destino'=>'China',
                'compania'=>$logistica3['company'],
                'precio'=>$logistica3['freightAmount']['formatedAmount'],
                'nombreServicio'=>$logistica3['serviceName'],
                'tiempoEstimado'=>$logistica3['time'],
                'paisOrigen'=>$logistica3['sendGoodsCountryFullName']
            ]);
        }

        $listado=collect();
        $listado->push([
            'BO'=>$Bolivia,
            'US'=>$UnitedStates,
            'CN'=>$China
        ]);
        
        return view('livewire.show-product',compact('listado'));
    }
}
