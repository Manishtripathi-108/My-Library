<?php

namespace App\Http\Controllers;

use App\Services\JokeService;
use Illuminate\Http\Request;

class JokeController extends Controller
{
    protected $jokeService;

    public function __construct(JokeService $jokeService)
    {
        $this->jokeService = $jokeService;
    }

    public function getJoke()
    {
        $joke = $this->jokeService->getJoke();
        return response()->json($joke);
    }

    public function getJokes($number)
    {
        $jokes = $this->jokeService->getJokes($number);
        return response()->json($jokes);
    }

    public function getJokeByCategory($category)
    {
        $joke = $this->jokeService->getJokeByCategory($category);
        return response()->json($joke);
    }

    public function getJokesByCategory($category, $number)
    {
        $jokes = $this->jokeService->getJokesByCategory($category, $number);
        return response()->json($jokes);
    }
}
