@extends('template.layout')

@section('title', 'Tambahin Lagu!')

@section('container')
    <div class="d-flex justify-content-center mt-5">
        <div class="container">
            <form method="POST" action="/setor">
                @csrf
                <h2 class="mb-3">Tambahin Data Lagu Favoritmu!</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pembuat</label>
                    <input type="text" class="form-control" id="pembuat" name="pembuat" value="{{ old('pembuat') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Rilis</label>
                    <input type="text" class="form-control" id="tanggal-rilis" name="tanggal_rilis" value="{{ old('tanggal_rilis') }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
        </div>
    </div>
@endsection
