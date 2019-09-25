@extends('layouts.navbar')

@section('title')
    Tambah Jurusan
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
            <h2>Tambah Jurusan</h2>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">

                <form action="{{route('submitClass')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name_class">Nama Jurusan</label>
                        <input type="text" class="form-control" name="name_class" id="name_class" placeholder="Nama Kelas">
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
                    <button type="submit" class="btn btn-info">Simpan</button>
                </form>
        </div>
            <div class="col-md-4">

                

            </div>
    </div>
</div>

@endsection