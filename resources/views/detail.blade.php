@extends('template/layout')

@section('title', 'Detail Lagu')

@section('container')
    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width: 45rem;">
            <div class="card-body">
                <a href="/"> < Kembali</a>
                <h5 class="card-title">{{ $id->judul }}</h5>
                <p class="card-text">Pembuat : {{ $id->pembuat }}</p>
                <p class="card-text">Tanggal Rilis : {{ $id->tanggal_rilis }}</p>
                <p class="card-text"></p>
                <a href="{{ $id->link }}" class="btn btn-primary mb-3">Nonton Disini!</a>

                <br>

                <form action="/{{ $id->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
                <a href="/{{ $id->id }}/edit"><button class="btn btn-success">Edit</button></a>
            </div>
        </div>
    </div>
@endsection
