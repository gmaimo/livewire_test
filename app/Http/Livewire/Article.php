<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Article extends Component
{

    public $article;

    protected $listeners = ['found' => 'evidenceWord'];

    public function evidenceWord($word)
    {
        //buscar y reemplazar word (recibimos variable word a traves de $this->search pasado en evento found)
        if ($word == "")
            return;
        $str = $this->article->title;
        $pattern = "/$word/i";
        $this->article->title = preg_replace($pattern, "<span class='bg-warning'>$word</span>", $str);

        $str = $this->article->subtitle;
        $pattern = "/$word/i";
        $this->article->subtitle = preg_replace($pattern, "<span class='bg-warning'>$word</span>", $str);

        $str = $this->article->text;
        $pattern = "/$word/i";
        $this->article->text = preg_replace($pattern, "<span class='bg-warning'>$word</span>", $str);
    }

    public function delete()
    {
        //borrar articulo
        $this->article->delete();
        $this->emit('articlesChanged');
    }

    public function render()
    {
        return view('livewire.article');
    }
}
