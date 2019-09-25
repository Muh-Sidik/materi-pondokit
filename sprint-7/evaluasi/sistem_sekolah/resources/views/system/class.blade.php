@extends('layouts.navbar')

@section('title')
    Tambah Kelas
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
            <h2>Tambah Kelas</h2>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">

                <form action="{{route('submitClass')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name_class">Nama Kelas</label>
                        <input type="text" class="form-control" name="name_class" id="name_class" placeholder="Nama Kelas">
                    </div>
                    <button type="submit" class="btn btn-info">Simpan</button>
                </form>
        </div>
            <div class="col-md-4">

                <ul class="list-group">
                        <li class="list-group-item active">Ruang Terdaftar</li>
                        @foreach($class as $value)
                <li class="list-group-item">{{$value->name_class}}-<a href="{{route('deleteClass', $value->id)}}">hapus</a></li>
                        @endforeach
                </ul>

            </div>
    </div>
</div>

@endsection