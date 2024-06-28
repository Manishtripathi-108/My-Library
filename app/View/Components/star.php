<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Star extends Component
{
    public int $rating;

    public function __construct(int $rating)
    {
        $this->rating = $rating;
    }

    public function render(): View|Closure|string
    {
        return view('components.star');
    }
}
