@extends('layouts.navbar')

@section('title')
    Detail Data
@endsection

@section('navbar')

<div class="container mt-3">
        <div class="row text-center">
            <div class="col">
            <h2>Daftar Barang di {{$nama->name_class}}</h2>
            </div>
        </div>
        
        <div class="container mt-3">
            <div class="row">
                <div class="col-md">
                    <a href="{{url('/menu')}}" class="btn btn-success"><< Menu</a>
                    <a href="{{route('export')}}" class="btn btn-primary">Export Excel</a>
                </div>
            </div>
        </div>
    
        <div class="row mt-3">
            <div class="col-md">
                <table class="table text-center">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kode. Barang</th>
                        <th scope="col">Ruang</th>
                        <th scope="col">Waktu Masuk</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail as $value)
                        <tr>
                        <td>{{$value->name_item}}</td>
                        <td>{{$value->code_item}}</td>
                        <td>{{$value->class->name_class}}</td>
                        <td>{{$value->created_at}}</td>
                        <td>{{$value->type}}</td>
                        <td>
                        {{-- <a href="{{route('edit', $value->id)}}" class="btn btn-success"><i class="far fa-edit"></i></a> --}}
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                <i class="far fa-edit"></i>
                        </button>
                        <a href="{{route('delete', $value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$detail->links()}}
            </div>
        </div>
    </div>

    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="far fa-edit"></i>
    </button> --}}
        <!-- Modal -->
        @foreach($detail as $value)
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                
                        <form action="{{route('update')}}" method="POST">
                                @csrf   
                                <input type="hidden" name="id" id="id" value="{{$value->id}}">
                                <div class="form-group">
                                        <label for="name_item">Nama Barang</label>
                                    <input type="text" class="form-control" value="{{$value->name_item}}" name="name_item" id="name_item" placeholder="Nama Barang">
                                    </div>
                                    <div class="form-group">
                                        <label for="code_item">Kode Barang</label>
                                    <input type="text" class="form-control" value="{{$value->code_item}}" id="code_item" name="code_item" placeholder="Kode Barang">
                                    </div>
                                    <input type="hidden" name="user_id" id="user_id" value="{{$value->user_id}}">
                
                                    <span>Alokasi Kelas</span>
                                        <div class="input-group mb-3">
                                                <select class="custom-select col-3" id="class_id" name="class_id">
                                                <option selected>Pilih Kelas</option>
                                                @foreach($class as $clas)
                                                @if($clas->id === $value->class_id)
                                                    @php $select = 'selected' @endphp
                                                @else
                                                    @php $select = '' @endphp
                                                @endif
                                                <option {{$select}} value="{{$clas->id}}">{{$clas->name_class}}</option>
                                                @endforeach
                                                </select>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="type">Jenis Barang</label>
                                        <input type="text" class="form-control" value="{{$value->type}}" id="type" name="type" placeholder="Jenis Barang">
                                        </div>
                                    

                </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



@endsection