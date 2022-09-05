<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Soccer.com Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] =  "Sobre nós";
        $viewData["description"] =  "Pagina sobre nós...";
        $viewData["author"] = "Desenvolvido por: Thiago Wolter";
        return view('home.about')->with("viewData", $viewData);
    }
}
