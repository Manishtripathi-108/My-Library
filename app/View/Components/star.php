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
        $stars = '';

        for ($i = 0; $i < 5; $i++) {
            if ($i < $this->rating) {
                $stars .= view('components.star')->render();
            } else {
                $stars .= view('components.star-empty')->render();
            }
        }

        return $stars;
    }
}
