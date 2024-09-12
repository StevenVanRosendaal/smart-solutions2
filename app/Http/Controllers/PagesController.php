<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function pagina1() {
        $name = "Steven";
        return view('pagina1', ['name' => $name]);
    }

    public function pagina2() {
        return view('pagina2');
    }

    public function pagina3() {
        return view('pagina3');
    }
}
