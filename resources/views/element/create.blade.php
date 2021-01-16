@extends('layout')
@section('content')
    <h1>Crear nuevo Elemento</h1>
    <div style="text-align:center">
<form method="POST" action="{{ route('element.store') }}">
    @csrf
        <label>Nombre de elemento<br>
        <input type="text" name="title" value="{{ old('title') }}">
        </label>

        @error('title')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror


        <br>
        <label>Periodo<br>
        <input type="text" name="Periodo" value="{{ old('Periodo') }}">
        </label>
        
        @error('Periodo')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror

        <br>
        <label>Numero atomico<br>
        <input type="text" name="numeroAtomico" value="{{ old('numeroAtomico') }}">
        </label>
        
        @error('numeroAtomico')
        <br>
        <small>*{{ $message }}</small>
        <br>
        @enderror

        <br>
        <label>imagen (URl)<br>
        <input type="text" name="url" value="{{ old('url') }}">
        </label>
        <br><br>
        <button>Guardar</button>
    </form>
</div>
@endsection