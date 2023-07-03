@extends('layouts.base')

  @section('contents') 

  @if (session('success'))
  @php $comic = session('success') @endphp

  <div class="alert alert-danger">
    hai eliminato con successo il fumetto in maniera definitiva
  </div>

  <div>
    <button class="btn btn-primary"><a class="text-light" href="{{route('comics.index')}}">torna alla home</a></button>
  </div>

  @endif

  @foreach ($trash as $comic)
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

<form action="{{ route('comics.restore',['comic' => $comic->id]) }}"
method="post"
class="d-inline-block"
>
@csrf
<button class="btn btn-success mt-2">ripristina</button>
</form>




<!-- Button trigger modal -->
<button type="button" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    elimina definitivamente
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            sei sicuro di voler eliminare definitivamente questo fumetto?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form
          action="{{ route('comics.hardDelete', ['comic' => $comic->id]) }}"
          method="post"
          class="d-inline-block"
          >
          @csrf
          @method('delete')
          <button class="btn btn-danger">Elimina</button>
          </form>
        </div>
      </div>
    </div>
  </div>


@endforeach

{{ $trash->links() }}
@endsection
