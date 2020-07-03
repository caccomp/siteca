<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projetosController extends Controller
{
    public function projetos() {
    	return view("projetos");
    }
}
