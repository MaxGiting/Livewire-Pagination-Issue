<?php

namespace App\Http\Livewire;

use App\Item;
use Livewire\Component;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.counter', [
            'items' => Item::paginate(2),
        ]);
    }
}
