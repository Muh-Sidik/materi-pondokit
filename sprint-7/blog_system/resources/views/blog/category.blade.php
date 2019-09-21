@extends('layouts.basic')

@section('basic')

    <nav class="navbar navbar-expand-lg navbar-light primary-color">
    <a class="navbar-brand" href="{{url('/home')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-6">
            <h3>Create Category</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="{{route('addcategory')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="category">Add Category</label>
                        <input type="text" name="category" class="form-control" id="category" placeholder="Category">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{url('/home')}}" class="btn btn-warning">Back</a>
                </form>
            </div>
            <div class="col-4">
                <h3>List Category<h3>
                    <ul class="list-group">
                            @foreach($category as $value)
                            <li class="list-group-item">{{$value->name_category}}</li>
                            @endforeach
                    </ul>
                    {{$category->links()}}
            </div>
        </div>
    </div>    

@endsection