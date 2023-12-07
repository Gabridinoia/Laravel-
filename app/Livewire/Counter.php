<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    //? Action -> una funzione, che posso far scattare direttamente dalla vista
    public function increment($num){
        $this->counter += $num;
    }

    public function render()
    {
        
        return view('livewire.counter');
    }
}
