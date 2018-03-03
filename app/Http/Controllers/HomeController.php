<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->method() === 'POST') {
            $chosenLanguage = $request->post('lang');

            if ($chosenLanguage) {
                App::setLocale($chosenLanguage);
            }
        }

        return view('home');
    }
}
