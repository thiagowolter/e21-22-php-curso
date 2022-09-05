<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home EAD Linux4DEV";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] =  "Sobre nós";
        $viewData["description"] =  "Pagina sobre nós...";
        $viewData["author"] = "Desenvolvido por: Xadrak Adriano Machado";
        return view('home.about')->with("viewData", $viewData);
    }
}
