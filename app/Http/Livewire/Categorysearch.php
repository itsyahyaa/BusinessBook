<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categorysearch extends Component
{
    public $search;
    public $categories = [];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {

        if ($this->search == '') {
            $this->categories = Category::all();
        } else {
            $search = '%' . $this->search . '%';
            $this->categories = Category::where('name', 'like', $search)->get();
        }
        return view('livewire.categorysearch');
    }
}