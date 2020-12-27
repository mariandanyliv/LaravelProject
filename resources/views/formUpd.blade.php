<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mb-3 text-white">
            <h4>Редагувати статтю</h4>
            <form action="/formUpd/check" method="post">
                @csrf
                <label for="number">ID статті</label>
                <input type="number" name="id" id="id" placeholder="Введість назву статті" class="form-control">

                <label for="name">Назва статті</label>
                <input type="text" name="name" id="name" placeholder="Введість назву статті" class="form-control">

                <label for="smallDescription">Коросткий опис статті</label>
                <input type="text" name="description" id="description" placeholder="Введість короткий опис статті" class="form-control">

                <label for="text">текст статті</label>
                <textarea name="text" id="text" placeholder="Введіть текст статті"  class="form-control"></textarea>

                <button type="submit" id="Update" class="btn btn-warning mt-5">Редагувати статтю</button>
            </form>
        </div>
    </div>
</div>

