<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personController extends Controller
{
    public static $persons = [
        ["id"=>"1", "name"=>"Faustão", "description"=>"Apresentador de tv", "image" => "faustao.jpg", "idade"=>"50"],
        ["id"=>"2", "name"=>"Neymar", "description"=>"Jogador de futebol", "image" => "neymar.jpg", "idade"=>"30"],
        ["id"=>"3", "name"=>"Silvio santos", "description"=>"Apresentador de tv", "image" => "silvio.jpg", "idade"=>"80"],
        ["id"=>"4", "name"=>"Steph Curry", "description"=>"Jogador de basquete", "image" => "curry.png", "idade"=>"30"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "persons - Online Store";
        $viewData["subtitle"] =  "List of persons";
        $viewData["persons"] = personController::$persons;
        return view('person.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $person = personController::$persons[$id-1];
        $viewData["title"] = $person["name"]." - Online Store";
        $viewData["subtitle"] =  $person["name"]." - person information";
        $viewData["person"] = $person;
        return view('person.show')->with("viewData", $viewData);
    }
}
