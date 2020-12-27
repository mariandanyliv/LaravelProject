<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 mb-3 text-white">
      <h4>Додавання статті</h4>
      <form action="/formAdd/check" method="post">
        @csrf
        <label for="name">Назва статті</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Введість назву статті" class="form-control">

        <label for="smallDescription">Коросткий опис статті</label>
        <input type="text" name="description" id="description" value="{{ old('description') }}" placeholder="Введість короткий опис статті" class="form-control">

        <label for="text">Текст статті</label>
        <textarea name="text" id="text", value="{{ old('text') }}"  placeholder="Введіть текст статті"  class="form-control"></textarea>

        <button type="submit" id="Addtional" class="btn btn-success mt-5">Додати статтю</button>
    </form>
    </div>
  </div>
</div>