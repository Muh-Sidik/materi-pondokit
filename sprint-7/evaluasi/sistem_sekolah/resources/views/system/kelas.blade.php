@extends('layouts.navbar')

@section('title')
    Data Jurusan
@endsection

@section('navbar')

<div class="container mt-3">
        <div class="row text-center">
            <div class="col">
            <h2>Daftar Kejuruan</h2>
            </div>
        </div>
        
        <div class="container mt-3">
            <div class="row">
                <div class="col-md">
                    <a href="{{url('/menu')}}" class="btn btn-success"><< Menu</a>
                </div>
                <div class="col-md">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Data Perkelas
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach($class_id as $value)
                        <a class="dropdown-item" href="{{route('detailsubclass', $value->id)}}">{{$value->name_class}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nama Kejuruan</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($kelas as $value)
                        <tr>
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
                {{$kelas->links()}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        + Tambah Kejurusan
                </button>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kejuruan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    
                        <form action="{{route('input')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Kejuruan</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Kejuruan">
                                </div>
                                <span>Kelas</span>
                                    <div class="input-group mb-3">
                                            <select class="custom-select col-3" id="class_id" name="class_id">
                                            <option selected>Pilih Kelas</option>
                                            @foreach($class_id as $class)
                                            <option value="{{$class->id}}">{{$class->name_class}}</option>
                                            @endforeach
                                            </select>
                                    </div>
                            </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection