<?php

namespace App\Http\Controllers;


use App\Element;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;


class TablaController extends Controller
{

    public function index($name)
    {
        echo "Hola : " . $name . "<br>";
        return view('welcome');
    }

    
    public function show($request){
        $elementos = Element::get();

        return view('test', compact('elementos'));

    }
        

}