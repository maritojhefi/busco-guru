<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarLinks extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $titulo;
    public $contenido;
    public $linkglobal;
    public function __construct($titulo, $contenido, $linkglobal)
    {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->linkglobal = $linkglobal;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        $lista=collect();
        foreach($this->contenido as $nombre=>$ruta)
        {
            $words = explode(" ", $nombre);
            $acronym = "";
    
            foreach ($words as $w) {
                $acronym .= $w[0];
            }
            $lista->push($acronym);
        }
       
       
        return view('components.sidebar-links',compact('lista'));
    }
}
