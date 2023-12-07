<?php

namespace App\Livewire;

use Livewire\Component;

class EditMemo extends Component
{
    public $memo;

    public $title;
    public $text;
    public $ps;

    public function mount(){
        $this->title = $this->memo->title;
        $this->text = $this->memo->text;
        $this->ps = $this->memo->post_script;
    }

    public function edit(){
        $this->memo->update([
            'title' => $this->title,
            'text' => $this->text,
            'post_script' => $this->ps,
        ]);

        return redirect(route('welcome'));
    }

    public function render()
    {
        return view('livewire.edit-memo');
    }
}
