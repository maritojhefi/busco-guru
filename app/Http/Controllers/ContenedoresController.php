<?php

namespace App\Http\Controllers;

use Goutte\Client;
use PDF;
use Illuminate\Http\Request;

class ContenedoresController extends Controller
{
    public $lista;
    

    public function alquileres(){
        return view('dashboard.contenedores.alquileres');
    }
    public function pdf($desde,$hasta,$porcentaje){
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.5688.cn/fcl/'.$desde.'-'.$hasta);
       
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
       
       
       $pdf = PDF::loadView('dashboard.contenedores.pdf', ['array'=>$array,'porcentaje'=>$porcentaje]);
        return $pdf->download('costos.pdf');
      
       
    }
}
