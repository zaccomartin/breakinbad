<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;



class ElementController extends Controller
{

    public function index()
    {
        $elements = Element::all();

        return view('test', compact('elements'));
    }

    public function show($id)
    {
        $elements = Element::find($id);
        return view('detail', compact('elements'));
    }

    public function edit($id)
    {
        $elements = Element::find($id);
        return view('element.edit', compact('elements'));
    }

    public function update($id, Request $request)
    {
        $elements = Element::find($id);

        $request->validate([
            'title' => 'required|min:5|max:10',
            'Periodo' => 'required',
            'numeroAtomico' => 'required'
          ]);
        
        $elements->update([
            'title' => request('title'),
            'Periodo' => request('Periodo'),
            'body' => request('numeroAtomico'),
            'url' => request('url')
        ]);

        return redirect()->route('test');
    }
}
