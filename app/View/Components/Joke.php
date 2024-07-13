<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\JokeService;

class Joke extends Component
{
    public $joke;

    public function __construct(JokeService $jokeService)
    {
        $this->joke = $jokeService->getJoke()['joke'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.joke');
    }
}
