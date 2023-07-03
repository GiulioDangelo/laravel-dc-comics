@extends('layouts.base')

  @section('contents') 

  @if (session('success'))
  @php $comic = session('success') @endphp

  <div class="alert alert-danger">
    hai eliminato con successo il fumetto
  </div>

  <form action="{{ route("comics.restore",['comic' => $comic])}}" method="post">
  @csrf
  <button class="btn btn-warning">ripristina</button>
  </form>
  @endif


  @if (session('restore_success'))
  @php $comic = session('restore_success') @endphp
  <div class="alert alert-success">
    il fumetto e' stato ripristinato
  </div>
  @endif

  <button class="add-comic btn btn-primary"><a class="text-light" href="{{route('comics.create')}}">aggiungi fumetto</a></button>

  <button class="trash btn btn-primary mt-4"><a class="text-light" href="{{route('comics.trash')}}">cestino</a></button>

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
