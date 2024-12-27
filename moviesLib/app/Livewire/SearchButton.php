<?php

namespace App\Livewire;

use Livewire\Component;

class SearchButton extends Component
{
    public bool $isHovered = false;

    public function toggleHover($state)
    {
        $this->isHovered = $state;
    }

    public function render()
    {
        return view('livewire.search-button');
    }
}