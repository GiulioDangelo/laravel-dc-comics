@extends('layouts.base')
@section('contents')   
<div class="card" style="max-width:50rem; margin:auto; margin-top:80px; display:flex; flex-direction:column; align-items:center; text-align:center;">
    <img src="{{ $comic->thumb }}" class="card-img-top" style="width: 400px">
    <div class="card-body">
        <div>{{ $comic->title }}</div>
        <div>{{ $comic->description }}</div>
        <div>{{ $comic->price }}</div>
        <div>{{ $comic->series }}</div>
        <div>{{ $comic->sale_date }}</div>
        <div>{{ $comic->type }}</div>
    </div>
    </div>
@endsection
</body>
</html>