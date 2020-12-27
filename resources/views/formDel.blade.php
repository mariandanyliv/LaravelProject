<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 mb-3 text-white">
      <h4>Видалення статті</h4>
      <form action="/formDel/check" method="post">
        @csrf
        <label for="number">ID статті</label>
        <input type="number" name="id" id="id" placeholder="Введість ID статті" class="form-control">
        <button type="submit" id="Delete" class="btn btn-danger mt-5">Видалити статтю</button>
      </form>
    </div>
  </div>
</div>