<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{

    public $article;

    protected $rules = [
        'article.title' => 'required|min:3|max:255',
        'article.subtitle' => 'required|min:3|max:255',
        'article.text' => 'required'
    ];

    //realtime validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        //validar articulo
        $this->validate();

        //guardar articulo
        Article::create($this->article);

        //emitir evento de creacion
        $this->emit('articlesChanged');

        //una vez creado articulo limpiar form
        $this->article['title'] = '';
        $this->article['subtitle'] = '';
        $this->article['text'] = '';

        session()->flash('message', 'Post successfully created!');

    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
