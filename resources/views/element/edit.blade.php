@extends('layout')
@section('content')
    <h1>Editar Elemento</h1>
    <div style="text-align:center">
<form method="POST" action="{{ route('element.update', $elements) }}">
    @csrf @method('PATCH')
        <label>Nombre de elemento<br>
        <input type="text" name="title" value={{ $elements->title }}>
        </label>
        
        @error('title')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror

        <br>
        <label>Periodo<br>
        <input type="text" name="Periodo" value={{ $elements->periodo }}>
        </label>
                
        @error('Periodo')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror

        <br>
        <label>Numero atomico<br>
        <input type="text" name="numeroAtomico" value={{ $elements->body }}>
        </label>
                
        @error('numeroAtomico')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror

        <br>
        <label>imagen (URl)<br>
        <input type="text" name="url" value={{ $elements->url }}>
        </label>
        <br><br>
        <button>Actualizar</button>
    </form>
</div>
@endsection