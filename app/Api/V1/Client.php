<?php

namespace App\Api\V1;

use GuzzleHttp\Client as Guzzle;

class Client
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guzzle $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function get($request)
    {
        return $this->guzzle->get($request);
    }
}
