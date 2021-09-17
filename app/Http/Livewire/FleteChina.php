<?php

namespace App\Http\Livewire;

use PDF;
use Goutte\Client;
use Livewire\Component;
use Stichoza\GoogleTranslate\GoogleTranslate;

class FleteChina extends Component
{
    public $desde,$hasta,$lista, $porcentaje=0;
    public $array;
    protected $rules = [
        'desde' => 'required|string',
        'hasta' => 'required|string',
       
        
    ];
    public function imprimir(){
        $pdf = PDF::loadView('dashboard.contenedores.pdf', $this->array)->output();
        return response()->streamDownload(
            fn () => print($pdf),
            "filename.pdf"
       );
    }

    public function buscar(){
        
        $this->validate();
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.5688.cn/fcl/'.$this->desde.'-'.$this->hasta);
       
       $this->lista=collect();
        $aver=$crawler->filter('tr > td')->each(function ($node) {
            $this->lista->push($node->text());
            
        });
        
        $cont=0;
        $subarray=collect();
        $array=collect();
        $lista=$this->lista;
        foreach($lista as $item)
        {
            if($cont<=8)
            {
               if($cont==4 || $cont==5 || $cont==6)
               {
                  // dd($item);
                $dividido=explode('U',$item);
                $subarray->push($dividido[0]);
                $cont++;
               }
               else
               {
                $subarray->push($item);
                $cont++;
               }
                
            }
            else
            {
                $subarray->push($item);
                $array->push($subarray);
                $subarray=collect();
                $cont=0;
            }
        }
       $this->array=$array;

       
    }
    public function render()
    {
        
        return view('livewire.flete-china');
    }
}
