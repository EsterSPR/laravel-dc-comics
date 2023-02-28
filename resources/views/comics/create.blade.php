@extends('layout.app')
@section('content')
<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h2>Add comic</h2>
                </div>
            </div>
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="control-label">Title</label>
                    <input type="text" name="titolo" class="form-control" placeholder="Add title">

                    @error('title')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                    
                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Description</label>
                    <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Add description"></textarea>

                    @error('description')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror

                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Cover image</label>
                    <input class="form-control" name="thumb" placeholder="Add cover image">

                    @error('thumb')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror

                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Price</label>
                    <input type="number" step="0.01" class="form-control" name="price" placeholder="Add price">

                    @error('price')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror

                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Serie</label>
                    <input class="form-control" name="series" placeholder="Add serie">

                    @error('series')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror

                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Type</label>
                    <input class="form-control" name="type" placeholder="Add type">

                    @error('series')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Sale date</label>
                    <input type="date" class="form-control datepicker" name="sale_date" placeholder="Add sale date">

                    @error('sale_date')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror

                </div>
                
                <div class="form-group mb-3">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>     
            </form>
        </div>
    </div>
</div>
@endsection