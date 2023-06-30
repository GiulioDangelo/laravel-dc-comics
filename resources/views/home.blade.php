@extends('layouts.base')

@section('contents')
<h1 class="text-center">Visualizza fumetti</h1>
{{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
<button class="home-btn"><a href="{{route('comics.index')}}">fumetti</a></button>
@endsection
