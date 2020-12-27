@extends('mainShablon')
  @section('title') Каталог @endsection
    @section('main_content')
      <main class="container mt-4">
        @foreach ($artical_paper as $item)
        <div class="row row-cols-1  mb-3 text-center">
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h1 class="my-0 fw-normal">{{$item->name}}</h1>
                </div>
                <div class="card-body">
                <h2>{{$item->description}}</h2>
                <a href="{{route('ReadArtical', $item->id)}}"><button class="w-100 btn btn-lg btn-primary">Переглянути статтю</button></a>
              </div>
            </div>
          </div>
        </div>
    @endforeach
  </main>
  @endsection
