<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function show()
    {
        return view('home');
    }

    public function shout(Request $request, $shout)
    {
        return view('home', ['shout' => $shout]);
    }
}
