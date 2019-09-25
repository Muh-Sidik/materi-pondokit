@extends('layouts.navbar')

@section('title')
    Tambah Data
@endsection

@section('navbar')

<div class="container mt-4">
    <div class="row">
        <div class="col">
        <a href="{{url('/menu')}}" class="btn btn-success"><< Kembali</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6 text-center">
            <h2>Tambah Data</h2>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col-6">

            <form action="{{route('submitData')}}" method="POST">
                @csrf   
                <div class="form-group">
                        <label for="name_item">Nama Barang</label>
                        <input type="text" class="form-control" name="name_item" id="name_item" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <label for="code_item">Kode Barang</label>
                        <input type="text" class="form-control" id="code_item" name="code_item" placeholder="Kode Barang">
                    </div>
                    <input type="hidden" name="user_id" id="user_id" value="{{$user_id->id}}">

                    <span>Alokasi Kelas</span>
                        <div class="input-group mb-3">
                                <select class="custom-select col-3" id="class_id" name="class_id">
                                <option selected>Pilih Kelas</option>
                                @foreach($class_id as $class)
                                <option value="{{$class->id}}">{{$class->name_class}}</option>
                                @endforeach
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="type">Jenis Barang</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Jenis Barang">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    
                </form>

        </div>
    </div>
</div>



@endsection