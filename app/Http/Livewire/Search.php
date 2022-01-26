<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class Search extends Component
{
    public $search='';
    public function render()
    {
        /* $datalist=Blog::where('title','like','%'.$this->search.'%')->get();
        return view('livewire.search',['datalist'=>$datalist,'query'=>$this->search]); */
        $datalist = Blog::where('title', 'like', '%' . $this->search . '%')->whereHas('category', function ($q) {
            $q->whereHas('parent', function ($q2) {
                $q2->where('parent_id', '=', 0)->where('status','=','true');
            })->where('status', '=', 'true');
        })->where('status', '=', 'true')->get();
        return view('livewire.search', ['datalist' => $datalist, 'query' => $this->search]);
    }
}
