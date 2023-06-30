<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.card-body div{
margin-top:10px; 
font-size: 20px;
}
</style>
<body>
    <div class="card" style="max-width:50rem; margin:auto; margin-top:80px; display:flex; flex-direction:column; align-items:center; text-align:center;">
        <img src="{{ $comic->thumb }}" class="card-img-top" style="width: 400px">
        <div class="card-body">
            <div>{{ $comic->title }}</div>
            <div>{{ $comic->description }}</div>
            <div>{{ $comic->price }}</div>
            <div>{{ $comic->series }}</div>
            <div>{{ $comic->sale_date }}</div>
            <div>{{ $comic->type }}</div>
            <button><a href="{{route('comics.create')}}">modifica</a></button>
        </div>
      </div>
</body>
</html>