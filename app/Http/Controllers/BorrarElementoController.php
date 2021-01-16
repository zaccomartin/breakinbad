<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;

class BorrarElementoController extends Controller
{
    public function destroy(Element $id){       

        $id->delete();

        return redirect()->route('test');

    }
}
