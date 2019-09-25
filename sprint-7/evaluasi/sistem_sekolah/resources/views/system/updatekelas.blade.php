@extends('layouts.navbar')

@section('title')
    Edit Jurusan
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
            <h2>Edit Jurusan</h2>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">

                <form action="{{route('editsubclass')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$sub->id}}">
                    <div class="form-group">
                        <label for="nama">Nama Jurusan</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{$sub->name_subclass}}" placeholder="Nama Kelas">
                    </div>
                    <span>Kelas</span>
                        <div class="input-group mb-3">
                                <select class="custom-select col-3" id="class_id" name="class_id">
                                {{-- <option selected>Pilih Kelas</option> --}}
                                
                                <option value="{{$sub->class->id}}">{{$sub->class->name_class}}</option>

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