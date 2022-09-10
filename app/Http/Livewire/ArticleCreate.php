<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{

    public $title;
    public $subtitle;
    public $text;

    protected $rules = [
        'title' => 'required|min:3|max:255',
        'subtitle' => 'required|min:3|max:255',
        'text' => 'required'
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
        Article::create([
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'text'=>$this->text
        ]);

        //emitir evento de creacion
        $this->emit('articleCreated');

        //una vez creado articulo limpiar form
        $this->title = '';
        $this->subtitle = '';
        $this->text = '';

        session()->flash('message', 'Post successfully created!');

    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
