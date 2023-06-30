@extends('layouts.base')

  @section('contents') 
  <button class="add-comic"><a href="{{route('comics.create')}}">aggiungi fumetto</a></button>
  @foreach ($comics as $comic)
<div class="card comic-card" style="max-width:50rem; margin:auto; margin-top:80px; display:flex; flex-direction:column; align-items:center; text-align:center;">
  <img src="{{ $comic->thumb }}" class="card-img-top" style="width: 400px">
  <div class="card-body">
      <div>{{ $comic->title }}</div>
      <div>{{ $comic->description }}</div>
      <div>{{ $comic->price }}</div>
      <div>{{ $comic->series }}</div>
      <div>{{ $comic->sale_date }}</div>
      <div>{{ $comic->type }}</div>
      <button><a class="fs-4 p-4" href="{{ route('comics.show', ['comic' => $comic->id]) }}">info</a></button>
  </div>
</div>
@endforeach
{{ $comics->links() }}
@endsection
