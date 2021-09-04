<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyApi extends Controller
{
    //
    function getApi()
    {
        return ['name'=>'alex', 'age'=>'23', 'location'=>'Newyork'];
    }
}
