<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Search extends Component
{
    public $search='';
    public function render()
    {
        $datalist=Blog::where('title','like','%'.$this->search.'%')->get();
        return view('livewire.search',['datalist'=>$datalist,'query'=>$this->search]);
    }
}
