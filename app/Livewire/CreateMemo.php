<?php

namespace App\Livewire;

use App\Models\Memo;
use Livewire\Component;

class CreateMemo extends Component
{
    public $title;
    public $text;
    public $ps;

    protected $rules = [
        'title' =>  'required|min:3',
        'text' => 'required',
    ];

    protected $messages = [
        'title.required' => 'Il titolo deve essere obbligatorio',
        'title.min' => 'Il titolo deve essere di almeno 3 caratteri',
        'text.required' => 'Il testo deve essere obbligatorio'
    ];

    //? Magic Methods -> Metodi (funzioni) che hanno un comportamento speciale in base al loro nome
    public function updated($property){
        $this->validateOnly($property);
    }

    public function store(){
        $this->validate();

        $memo = Memo::create([
            'title' => $this->title,
            'text' => $this->text,
            'post_script' => $this->ps,
        ]);

        $this->reset();
        session()->flash('message', 'Memo creato con successo');
    }

    public function render()
    {
        return view('livewire.create-memo');
    }
}
