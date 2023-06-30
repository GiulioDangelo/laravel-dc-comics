@extends('layouts.base')
@section('contents')   
<h1>Create Post</h1>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


<form method="POST" action="{{ route('comics.store')}}">
@csrf
<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
</div>

<div class="mb-3">
    <label for="description" class="form-label">description</label>
    <textarea type="text" class="form-control" id="description" name="description" rows="3" value="{{old('description')}}"></textarea>
</div>

<div class="mb-3">
  <label for="thumb" class="form-label">thumb</label>
  <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
</div>

<div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
</div>

<div class="mb-3">
    <label for="series" class="form-label">series</label>
    <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
</div>


<div class="mb-3">
    <label for="sale_date" class="form-label">sale date</label>
    <input class="form-control" id="sale_date" name="sale_date" type="date" value="{{old('sale_date')}}">
</div>

<div class="mb-3">
  <label for="type" class="form-label">type</label>
  <input class="form-control" id="type" name="type" value="{{old('type')}}">
</div>

<button type="submit">invia</button>
</form>
@endsection
