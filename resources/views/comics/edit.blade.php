@extends('layouts.base')
@section('contents')   
<h1>Edit Post</h1>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


<form method="POST" action="{{ route('comics.update', ['comic' => $comic ->id])}}">
@csrf
@method('PUT')

<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title" value="{{old('title' , $comic ->title)}}">
</div>

<div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea type="text" class="form-control" id="description" name="description" rows="3">{{old('description', $comic ->description)}}</textarea>
</div>

<div class="mb-3">
  <label for="thumb" class="form-label">thumb</label>
  <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic ->thumb)}}">
</div>

<div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic ->price)}}">
</div>

<div class="mb-3">
    <label for="series" class="form-label">series</label>
    <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comic ->series)}}">
</div>


<div class="mb-3">
    <label for="sale_date" class="form-label">sale date</label>
    <input class="form-control" id="sale_date" name="sale_date" type="date" value="{{old('sale_date', $comic ->sale_date)}}">
</div>

<div class="mb-3">
  <label for="type" class="form-label">type</label>
  <input class="form-control" id="type" name="type" value="{{old('type', $comic ->type)}}">
</div>

<button type="submit">invia</button>
</form>
@endsection
