<?php

namespace App\Api\V1;

class YugiClient
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->base_url = env('YUGIOH_BASE_URL');
    }

    public function saveAllSets()
    {
        $sets = $this->client->get($this->base_url.'card_sets');
        
    }

    public function getAllSets()
    {
        return $this->client->get($this->base_url.'card_sets');
    }
}
