<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Article extends Component
{

    public $article;

    public function delete()
    {
        //borrar articulo
        $this->article->delete();
        $this->emit('articleCreated');
    }

    public function render()
    {
        return view('livewire.article');
    }
}
