@extends('layout')

@section('content')

    <h1>Contenido de Elements</h1>

    <ul>
    @foreach ($elements as $element)
    
    <li>
        <a href="{{ route('detail', $element->id) }}">{{ $element->title }}</a>
    </li>
        
    @endforeach
    </ul>
@endsection