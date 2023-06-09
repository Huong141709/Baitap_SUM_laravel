<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{

    public function getData() {
        $reponse = Http::get('https://api.covid19api.com/summary');
        $data = $reponse ->json();
        return view('index') -> with('data', $data);
    }

}
