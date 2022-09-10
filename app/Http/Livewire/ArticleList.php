<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleList extends Component
{

    public $articles;

    //crear evento update cuando escuche que se ha creado articulo
    protected $listeners = ['articleCreated'=>'updateArticles'];

    public function updateArticles()
    {
        $this->articles = Article::latest()->get();
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
