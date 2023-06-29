@foreach ($comics as $comic)
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
@endforeach