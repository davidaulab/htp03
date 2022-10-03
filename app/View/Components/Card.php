<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Card title.
     */ 
    public $title;
    /**
     * Card Body.
     */ 
    public $body;
    /**
     * Card link to open detail Brewery.
     */ 
    public $link;
    public $text;
  
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $body, $link = '', $text = '')
    {
        //
        $this->title = $title;
        $this->body = $body;
        $this->link = $link;
        $this->text = $text;
 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
