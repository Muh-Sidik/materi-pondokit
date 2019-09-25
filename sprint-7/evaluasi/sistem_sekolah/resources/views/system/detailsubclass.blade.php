@extends('layouts.navbar')

@section('title')
    Detail Perkelas
@endsection

@section('navbar')

<div class="container mt-3">
        <div class="row text-center">
            <div class="col">
            <h2>Daftar Kejuruan di {{$nama->name_class}}</h2>
            </div>
        </div>
        
        <div class="container mt-3">
            <div class="row">
                <div class="col-md">
                    <a href="{{url('/menu')}}" class="btn btn-success"><< Menu</a>
                </div>
            </div>
        </div>
    
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nama Kejuruan</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($class as $value)
                        <tr>
                        <td>{{$i++}}</td>
                        <td>{{$value->class->name_class}}</td>
                        <td>{{$value->name_subclass}}</td>
                        <td>
                        <a href="{{route('updatesubclass', $value->id)}}" class="btn btn-success"><i class="far fa-edit"></i></a>
                        <a href="{{route('deletesub', $value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$class->links()}}
            </div>
        </div>
    </div>
    
@endsection