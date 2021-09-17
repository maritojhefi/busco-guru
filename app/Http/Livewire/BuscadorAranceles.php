<?php

namespace App\Http\Livewire;

use Goutte\Client;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class BuscadorAranceles extends Component
{
    public $buscar;
    public $lista;
    public $resultado;
    public function render()
    {
        if($this->buscar!=null)
        {
            $client = new Client();
            $crawler = $client->request('GET', 'http://anbsw08.aduana.gob.bo:7601/buaran/search.do');
            
            $form = $crawler->selectButton('Buscar')->form();
            $crawler = $client->submit($form, ['txtpart' => $this->buscar]);
           $this->lista=collect();
            $aver=$crawler->filter('tr > td')->each(function ($node) {
                $this->lista->push($node->text()."\n");
                
            });
            $contador=0;
            $subarray=collect();
            $array=collect();
            //dd($this->lista);
            if($this->lista->count()==0){
                $this->dispatchBrowserEvent('alert',[
                    'type'=>'warning',
                    'message'=>"Su busqueda no tiene resultados!"
                ]);
            }
            else{
                $this->dispatchBrowserEvent('alert',[
                    'type'=>'success',
                    'message'=>"Su busqueda tiene ".($this->lista->count()/5)." resultados!"
                ]);
            }
            foreach($this->lista as $cada4)
            {
                
                if($contador<=3)
                {
                    $subarray->push($cada4);
                    if($contador==1)
                     {
                       $filtro= explode('.',$cada4);
                       $ultimavariable=Str::substr($filtro[3], 0, 3);
                        $request=Http::get('http://anbsw08.aduana.gob.bo:7601/buaran/details.do?p1='.$filtro[0].$filtro[1].'&p2='.$filtro[2].'&p3='.$ultimavariable);
                       
                        $filtrohtml=explode('<div class="col-sm-9 text-left">',response($request));
                        $porcentaje=explode('</div>',$filtrohtml[8]);
                        $subarray->push($porcentaje[0]);
                     }
                    
                    $contador++;
                }
                else{
                    $subarray->push($cada4);
                    $array->push($subarray);
                    $subarray=collect();
                    $contador=0;
                }
               
            }
            $this->resultado=$array;
        }
       
    
        return view('livewire.buscador-aranceles');
    }
}
