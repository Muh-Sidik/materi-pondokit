@extends('layouts.basic')

@section('basic')

    <nav class="navbar navbar-expand-lg navbar-light dark-color">
    <div class="container">
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
    </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-6">
            <h3>Create Article</h3>
            </div>
        </div>

        <div class="col-6">
        <form action="{{route('create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control rounded-0" name="desc" id="desc" rows="7"></textarea>
                </div>
                    <input type="hidden" name="user_id" value="{{($user_id->id)}}">
                    <div class="row">
                        <div class="col-md-6 select-outline">
                            <select name="category_id" class="mdb-select md-form md-outline colorful-select dropdown-primary">
                                <option value="" disabled selected>Choose your Category</option>
                                @foreach($category as $value)
                                <option value="{{$value->id}}">{{$value->name_category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{url('/home')}}" class="btn btn-warning">Back</a>
            </form>
        </div>
    </div>


@endsection