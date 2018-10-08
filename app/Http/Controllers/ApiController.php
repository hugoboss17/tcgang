<?php

namespace App\Http\Controllers;

use App\Api\V1\YugiClient;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(YugiClient $yugi)
    {
        $this->yugi = $yugi;
    }

    public function getAllSets()
    {
        return $this->yugi->getAllSets();
    }
}
