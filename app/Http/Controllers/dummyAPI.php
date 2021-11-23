<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    public function getData(Type $var = null)
    {
        # code...
        return [
            "name" => "Selena",
            "email" => "selenagomz@gomez.com"
        ];
    }
}
