<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    public $tipo, $titulo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $tipo)
    {
        $this->titulo = $titulo;
        $this->tipo = $tipo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('componentes.alerta');
    }
}
