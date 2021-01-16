@extends('layout')

@section('content')

    <h1>Detalles de elemento</h1>
    
    <ul>
        <li>
            Nombre : {{ $elements->title }}<br>
            Periodo : {{ $elements->periodo }} <br>
            Numero atomico : {{ $elements->body }}<br>
            Imagen : <br> <div style="text-align: center"><img src="{{ $elements->url }}"> </div><br>
        </li>
    </ul>
<center>
    <a href="{{ route('element.edit', $elements) }}">Editar</a><br><br>
    <form method="POST" action="{{ route('element.destroy', $id = $elements->id ) }}">
    @csrf 
    <input type="hidden" name="_method" value="DELETE">
    <button>Eliminar</button>
    </form><br><br><a href="./">volver</a> </center>
@endsection