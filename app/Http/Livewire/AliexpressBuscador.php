<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Calculadora_aerea;
use Illuminate\Support\Facades\Http;

class AliexpressBuscador extends Component
{
    public $search;
    public $lista;
    public $dimensiones=null;
    public $min;
    public $max;
    public $precioaereo;
    public $desde;
    public $hasta;
    
    protected $rules = [
        'min' => 'required|integer',
        'max' => 'required|integer',
        'desde' => 'required|size:2',
        'hasta' => 'required|size:2',
    ];

    public function calcular($datos)
    {
       
        $pesofinal=0;
        $valores=Calculadora_aerea::first();
        $array=$this->dimensiones;
       
        $alto=$array[0]['altura']/100;
        $ancho=$array[0]['ancho']/100;
        $largo=$array[0]['largo']/100;
        
        $total=($ancho*$alto*$largo)*167;
        if($total>$array[0]['peso'])
        {
            $pesofinal=$total;
        }
        else
        {
            $pesofinal=$array[0]['peso'];
        }
       $montos=Calculadora_aerea::find(1);
       foreach($montos->precios as $item)
       {
        if($pesofinal>$item->min && $pesofinal<$item->max)
        {
            $precioaereo=$pesofinal*$item->precio;
            if($pesofinal<=5)
            {
                $precioaereo=$precioaereo+88;
            }
            $this->precioaereo=$precioaereo;
            $break;
        }
       }
       
    }
    
    public function buscar($id)
    {
        $this->reset('dimensiones');
        try {
            
            $peticionDetalle = Http::withHeaders([
                'x-rapidapi-host' => 'magic-aliexpress1.p.rapidapi.com',
                'x-rapidapi-key' => 'e4c9d66817msh17a8b0befe401e2p10d15djsn84ce13f18ba6'
            ])->get('https://magic-aliexpress1.p.rapidapi.com/api/shipping/'.$id, [
               
               'toCountry'=>'BO'
            ]);
           // dd(json_decode($peticionDetalle, true));
            $array=json_decode($peticionDetalle, true);
            //dd($array['packageInfo']['length']);
            $datos=null;
            $datos=collect();
            $datos->push([
                'largo'=>$array['packageInfo']['length'],
                'ancho'=>$array['packageInfo']['width'],
                'altura'=>$array['packageInfo']['height'],
                'peso'=>$array['packageInfo']['weight']
            ]);
            $this->dimensiones=$datos;
            
            $this->dispatchBrowserEvent('abrirmodal',['modal' => $id]);
            $this->calcular($datos);

        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('alert',[
                'type'=>'danger',
                'message'=>"Ups, ocurrio un error... Intentalo de nuevo!"
            ]);
        }
       
    
    }

    public function buscarAliexpress()
    {
        
            if(is_numeric($this->search))
        {
            $response = Http::withHeaders([
                'x-rapidapi-host' => 'magic-aliexpress1.p.rapidapi.com',
                'x-rapidapi-key' => 'e4c9d66817msh17a8b0befe401e2p10d15djsn84ce13f18ba6'
            ])->get('https://magic-aliexpress1.p.rapidapi.com/api/product/'.$this->search,[
                'targetCurrency'=>'USD'
            ]);
            $this->lista=collect();
            $array=json_decode($response, true);
           //dd($array);
            
                $this->lista->push([
                'precio'=>$array['app_sale_price'],
                'moneda'=>$array['app_sale_price_currency'],
                'id'=>$array['product_id'],
                'nombre'=>'',
                'foto'=>$array['metadata']['imageModule']['imagePathList'][0],
                'url'=>$array['product_detail_url']
            ]);
            //dd(json_decode($response, true));
        }
        else
        {
            $this->validate();
        $response = Http::withHeaders([
            'x-rapidapi-host' => 'magic-aliexpress1.p.rapidapi.com',
            'x-rapidapi-key' => 'e4c9d66817msh17a8b0befe401e2p10d15djsn84ce13f18ba6'
        ])->get('https://magic-aliexpress1.p.rapidapi.com/api/products/search', [
            'name'=>$this->search,
            'minSalePrice'=>$this->min,
            'shipToCountry'=>$this->hasta,
            'sort'=>'NEWEST_DESC',
            'page'=>'1',
           'maxSalePrice'=>$this->max,
           'shipFromCountry'=>$this->desde,
           
        ]);
        $this->lista=collect();
        $array= json_decode($response, true); 
       
        foreach($array['docs'] as $item)
        {
            //dd($item['metadata']['logistics']);
            if(isset($item['metadata']['logistics']['logisticsDesc']))
            {
                $this->lista->push([
                    'precio'=>$item['app_sale_price'],
                    'moneda'=>$item['app_sale_price_currency'],
                    'id'=>$item['product_id'],
                    'nombre'=>$item['product_title'],
                    'foto'=>$item['metadata']['image']['imageUrl'],
                    'url'=>$item['product_detail_url'],
                    'logistica'=>$item['metadata']['logistics']['logisticsDesc'],
                ]);
            }
            else
            {
                $this->lista->push([
                    'precio'=>$item['app_sale_price'],
                    'moneda'=>$item['app_sale_price_currency'],
                    'id'=>$item['product_id'],
                    'nombre'=>$item['product_title'],
                    'foto'=>$item['metadata']['image']['imageUrl'],
                    'url'=>$item['product_detail_url'],
                   
                ]);
            }
           
            
        }
       }
        
        
    }
    public function render()
    {
        
        return view('livewire.aliexpress-buscador');
    }
}
