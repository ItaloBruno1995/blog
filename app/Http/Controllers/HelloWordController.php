<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWordController extends Controller
{
    //Metodo Para chamar a view Helow Word
public function index(){

    $helloword = 'Hello Word';

    return view('hello_world.index', compact('helloword'));//Chamado a view e passando a variavel

}

}
