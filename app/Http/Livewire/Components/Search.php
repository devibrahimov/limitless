<?php

namespace App\Http\Livewire\Components;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use App\Models\Product;

class Search extends Component
{
    public string $search = '';
    public Collection $search_results;


    public function mount()
    {
        $this->search = '';
        $this->search_results = new Collection;
    }

    public function render()
    {
        if($this->search !='') {
            $this->search_results =  Product::without('translations')->where('name','like','%'.$this->search.'%')->active()->get();
        }

        return view('livewire.components.search');
    }
}
