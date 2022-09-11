<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{
    public $articles;
    public $search;

    //crear evento update cuando escuche que se ha creado articulo
    protected $listeners = ['articlesChanged'=>'updateArticles'];

    public function updateArticles()
    {
        $this->articles = Article::latest()->get();
    }

    public function updatedSearch()
    {
        //recuperar los articulos que coinciden con la busqueda
        $this->articles = Article::where('title','like',"%$this->search%")->
                                    orWhere('subtitle','like',"%$this->search%")->
                                    orWhere('text','like',"%$this->search%")->
                                    latest()->get();
        $this->emit('found', $this->search);
    }

    public function mount()
    {
        //recuperar todos los articulos
        $this->articles = Article::latest()->get();
    }

    public function render()
    {
        return view('livewire.article-list');
    }
}
