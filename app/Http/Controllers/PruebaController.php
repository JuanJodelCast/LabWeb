<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

Class PruebaController extends Controller {

    public function index() {
        return view('hola');
    }
}