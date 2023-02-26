@extends('layout.app')
@section('page-title', 'DC Comics')

@section('content')

<div class="w-100 es_container g-0">

        <div class="row w-100 m-0 row-cols-1 section-padding es_comicontainer">

            @foreach($comics as $comic)

            <div class="col-2">
                <div class="card h-100 border-0 es_card">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body px-0">
                        <h6 class="card-title">{{ $comic['title'] }}</h6>
                        <!-- <p class="card-text">{{ $comic['description'] }}</p> -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $comic['price'] }}</li>
                            <li class="list-group-item">{{ $comic['series'] }}</li>
                            <li class="list-group-item">{{ $comic['sale_date'] }}</li>
                            <li class="list-group-item">{{ $comic['type'] }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>

@endsection