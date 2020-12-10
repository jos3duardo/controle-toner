<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TonerCreate extends Component
{
    public $modelo;
    public $marca;
    public $tipo;
    public $status;
    public $cilindro;

    public function create()
    {
        
    }
    public function render()
    {
        return view('livewire.toner-create');
    }
}
