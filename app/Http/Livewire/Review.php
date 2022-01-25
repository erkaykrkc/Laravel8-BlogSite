<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class Review extends Component
{
    public $record,$subject,$review,$blog_id,$rate;


    public function mount($id)
    {
        $this->record=Blog::findOrFail($id);
        $this->blog_id=$this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput()
    {
        $this->subject=null;
        $this->review=null;
        $this->rate=null;
        $this->blog_id=null;
        $this->IP=null;
    }

    public function store()
    {
        $this->validate([
                'subject'=>'required|min:5',
                'review'=>'required|min:10',
                'rate'=>'required',
        ]);


        \App\Models\Review::create([
                'blog_id'=>$this->blog_id,
                'user_id'=>Auth::id(),
                'IP'=>$_SERVER['REMOTE_ADDR'],
                'rate'=>$this->rate,
                'subject'=>$this->subject,
                'review'=>$this->review,
        ]);

        session()->flash('message','Review send successfully.');
        $this->resetInput();
    }

}
