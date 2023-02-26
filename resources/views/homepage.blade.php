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
                    </div>
                </div>
            </div>

            @endforeach

            <div class="w-100 text-center mt-3"><button class="load-more">LOAD MORE</button></div>

        </div>

    </div>

@endsection