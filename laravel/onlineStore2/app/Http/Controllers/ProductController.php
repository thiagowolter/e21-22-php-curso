<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"Borussia Dortmund", "description"=>"2022/23 Home Kit", "image" => "bvb.jpg","size"=>"M", "brand"=>"Puma", "gender"=>"Masculino", "price"=>"299,00"],
        ["id"=>"2", "name"=>"Paris Saint-Germain", "description"=>"2022/23 Home Kit", "image" => "psg.jpg","size"=>"M", "brand"=>"Nike", "gender"=>"Feminino",  "price"=>"399,00"],
        ["id"=>"3", "name"=>"Liverpool FC", "description"=>"2021/22 Away Kit", "image" => "liverpool.jpg","size"=>"M", "brand"=>"Nike", "gender"=>"Masculino",  "price"=>"199,00"],
        ["id"=>"4", "name"=>"CR Flamengo", "description"=>"2022/23 Home Kit", "image" => "fla.jpg","size"=>"M", "brand"=>"Adidas", "gender"=>"Masculino", "price"=>"299,00"],
        ["id"=>"5", "name"=>"Real Madrid", "description"=>"2022/23 Home Kit", "image" => "real.jpg","size"=>"M", "brand"=>"Adidas", "gender"=>"Masculino", "price"=>"259,00"],
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
