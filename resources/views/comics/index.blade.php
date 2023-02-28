@extends('layout.app')

@section('content')

<div class="w-100 es_container g-0">

        <div class="row w-100 m-0 row-cols-1 mt-5 text-center">
            <a href="{{route('comics.create')}}">
                <button class="btn btn-primary">Add Comic</button>
            </a>
        </div>

        <div class="row w-100 m-0 row-cols-1">

            @foreach($comics as $comic)

            <div class="col-2 my-5">
                <div class="card h-100">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['titolo'] }}">
                    <div class="card-body px-0">
                        <h5 class="card-title px-3">{{ $comic['titolo'] }}</h5>
                        <!-- <p class="card-text">{{ $comic['description'] }}</p> -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Original price: ${{ $comic['price'] }}</li>
                            <li class="list-group-item">Series: {{ $comic['series'] }}</li>
                            <li class="list-group-item">Sale date: {{ $comic['sale_date'] }}</li>
                            <li class="list-group-item">Type: {{ $comic['type'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>

@endsection