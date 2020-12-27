@extends('mainShablon')
  @section('title') Каталог @endsection
    @section('main_content')
      <main class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center text-white">
          <h1 class="display-4">Pricing</h1>
          <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
        </div>

        @foreach ($artical_paper as $item)
        <div class="row row-cols-1  mb-3 text-center">
          <div class="col">
            <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h1 class="my-0 fw-normal">{{$item->name}}</h1>
                </div>
                <div class="card-body">
                <h2>{{$item->description}}</h2>
                <a href="{{route('read_paper', $item->id)}}"><button class="w-100 btn btn-lg btn-primary">Переглянути статтю</button></a>
              </div>
            </div>
          </div>
        </div>
      </main>
    @endforeach
  @endsection
