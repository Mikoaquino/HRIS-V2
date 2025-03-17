<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
    function trips()
    {
        return view('modules.trips');
    }
}
