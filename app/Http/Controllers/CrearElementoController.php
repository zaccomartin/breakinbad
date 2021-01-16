<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Element;
use App\Models\Element as ModelsElement;
use App\Http\Requests\SaveFormElement;

class CrearElementoController extends Controller
{
    public function create()
    {
        return view('element.create');  
    }

    public function store(Request $request)
    {

      $request->validate([
        'title' => 'required|min:5|max:10',
        'Periodo' => 'required',
        'numeroAtomico' => 'required'
      ]);
      
      ModelsElement::create([
        'title' => request('title'),
        'Periodo' => request('Periodo'),
        'body' => request('numeroAtomico'),
        'url' => request('url')
      ]);

      return redirect()->route('test');

    }
}
