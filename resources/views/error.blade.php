<div class="container">
    <div class="row">
        <div class="col-md-8 mb-3 text-white">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        </div>
    </div>
</div>