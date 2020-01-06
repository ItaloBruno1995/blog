<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class postController extends Controller
{
  
     //Metodo para exibição da view
    public function create(){

        return view('posts.create');//caminho para a view 
    }

    //Receber os dados da formulario
    public function store(Request $request){

    }

}
