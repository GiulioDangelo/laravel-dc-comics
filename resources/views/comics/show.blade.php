<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top">
        <div class="card-body">
            <div>{{ $comic->title }}</div>
            <div>{{ $comic->description }}</div>
            <div>{{ $comic->price }}</div>
            <div>{{ $comic->series }}</div>
            <div>{{ $comic->sale_date }}</div>
            <div>{{ $comic->type }}</div>
        </div>
      </div>
</body>
</html>