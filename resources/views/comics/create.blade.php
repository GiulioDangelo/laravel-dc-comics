<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
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
      <textarea type="text" class="form-control" id="description" name="description" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label for="thumb" class="form-label">thumb</label>
    <input type="text" class="form-control" id="thumb" name="thumb">
  </div>

  <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="text" class="form-control" id="price" name="price">
  </div>

  <div class="mb-3">
      <label for="series" class="form-label">series</label>
      <input type="text" class="form-control" id="series" name="series">
  </div>


  <div class="mb-3">
      <label for="sale_date" class="form-label">sale date</label>
      <input class="form-control" id="sale_date" name="sale_date">
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">type</label>
    <input class="form-control" id="type" name="type">
  </div>

<button type="submit">invia</button>
</form>
</body>
</html>