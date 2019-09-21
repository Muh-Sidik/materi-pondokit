@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-primary" href="{{url('/create')}}">+ Add Article</a>
            <a class="btn btn-success" href="{{url('/addcategory')}}">+ Add Category</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach($articles as $article)
                <div class="card-header">Penulis: {{$article->user->name}} | category: {{$article->category->name_category}}
                </div>
                
                <div class="card-body">
                            <div class="container text-center">
                            <h5 class="display-4">{{$article->title}}</h5>
                            <p class="lead">{{strlen($article->description) > 50 ? 
                            substr($article->description, 0, 50) . '...' : ($article->description)}}</p>
                            
                        <a class="btn btn-indigo" href="{{route('edit', $article->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('delete', $article->id)}}">Delete</a>
                    </div>
                </div>
                @endforeach
            </div>
            {{$articles->links()}}
        </div>
    </div>
</div>



@endsection
