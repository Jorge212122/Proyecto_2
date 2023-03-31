<?php

namespace App\View\Components;

use Closure;
use App\Models\Libro;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LibroFormulario extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     * @param \App\Models\Libro $libro
     */
    public function __construct($libro = null)
    {
        if(is_null($libro))
        {
            $libro = Libro::make([]);
        }
        $this->libro = $libro;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $params =
        [
            'libro' => $this->libro,
        ];
        return view('components.libro-formulario', $params);
    }
}
