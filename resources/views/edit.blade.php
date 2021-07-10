@extends('template.layout')

@section('title', 'Ubah Data Lagu!')

@section('container')
    <div class="d-flex justify-content-center mt-5">
        <div class="container">
            <form method="POST" action="/{{ $id->id }}">
                @method('put')
                @csrf
                <h2 class="mb-3">Ubah Data Lagu!</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $id->judul }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pembuat</label>
                    <input type="text" class="form-control" id="pembuat" name="pembuat" value="{{ $id->pembuat }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Rilis</label>
                    <input type="text" class="form-control" id="tanggal-rilis" name="tanggal_rilis" value="{{ $id->tanggal_rilis }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{ $id->link }}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data!</button>
            </form>
        </div>
    </div>
@endsection
