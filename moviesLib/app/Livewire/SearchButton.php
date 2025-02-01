<?php

namespace App\Livewire;

use Livewire\Component;


class SearchButton extends Component
{
    public $query;
    public $isHovered = false;

    public function toggleHover($state)
    {
        $this->isHovered = $state;
    }

    public function search()
    {
        return redirect()->route('movie.search', ['query' => $this->query]);
    }

    public function render()
    {
        return view('livewire.search-button');
    }
}