@extends('mainShablon')
@section('title') {{$ReadArtical->name}} @endsection
@section('main_content')
    <main class="container">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 text-center text-white">
            <h1 class="display-4">{{$ReadArtical->name}}</h1>
            <p class="lead"><h4>{{$ReadArtical->description}}</h4></p>
            <p class="lead">{{$ReadArtical->text}}</p>
        </div>
    </main>
@endsection