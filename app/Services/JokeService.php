<?php

namespace App\Services;

use GuzzleHttp\Client;

class JokeService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://127.0.0.1:8000/']); // Ensure the URL matches your Flask server
    }

    public function getJoke()
    {
        $response = $this->client->get('joke');
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getJokes($number)
    {
        $response = $this->client->get("jokes/{$number}");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getJokeByCategory($category)
    {
        $response = $this->client->get("joke/{$category}");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getJokesByCategory($category, $number)
    {
        $response = $this->client->get("jokes/{$category}/{$number}");
        return json_decode($response->getBody()->getContents(), true);
    }
}
