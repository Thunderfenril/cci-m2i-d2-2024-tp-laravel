<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // This is only default controller
    function index()
    {
        return view("index.index", [
            'app_name' => config('app.name'),
        ]);
    }

    function about() {
        return view('about.About', [
            'app_name' => config('app.name'),
        ]);
    }

    function contact() {
        return view('contact.Contact', [
            'app_name' => config('app.name'),
        ]);
    }

    function test($var)
    {
        var_dump($var);
    }
}
