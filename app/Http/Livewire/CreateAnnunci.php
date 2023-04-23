<?php

namespace App\Http\Livewire;

use Livewire\Component;
use  App\Models\Annunci;

class CreateAnnunci extends Component
{
     public $title;
     public $description;
     public $price;
     public function store()
     {
        Annuci::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);
     }


    public function render()
    {
        return view('livewire.create-annunci');
    }
}
