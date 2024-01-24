<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function  index() 
    {
        return view('welcome', ['error' => ""]);
    }

    public function showFirst()
    {
        return view('first');
    }

    public function showSecond()
    {
        return view('second');
    }

    public function showPage($slug)
    {
        $path = base_path("resources/html/{$slug}.html");

        if (!file_exists($path)) {
            abort(404);
        }

        $pageContent = file_get_contents($path);

        return view('page', ['page' => $pageContent]);
    }

    public function showData(LoginFormRequest $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');

        $pageContent = $firstName . ' - ' . $lastName;

        return view('page', ['page' => $pageContent]);
    }
}
