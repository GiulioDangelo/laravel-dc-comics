<form method="POST" action="{{ route('comics.store')}}">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title">
  </div>

  <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <textarea type="text" class="form-control" id="description" rows="3"></textarea>
  </div>

  <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="text" class="form-control" id="price">
  </div>

  <div class="mb-3">
      <label for="series" class="form-label">series</label>
      <input type="text" class="form-control" id="series">
  </div>


  <div class="mb-3">
      <label for="sale_date" class="form-label">sale date</label>
      <input class="form-control" id="sale_date" >
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">type</label>
    <input class="form-control" id="type" >
  </div>

<button type="submit">invia</button>
</form>