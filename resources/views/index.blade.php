@extends('template.layout')

@section('title', 'List Lagu')

@section('container')
    <div class="container mt-5">
        <h2 class="mb-4">List Lagu Favorit</h2>
        <a href="/tambah"><button class="btn btn-success mb-3">Tambahin Lagu Favorit!</button></a>
        <ol class="list-group list-group-numbered">
            @foreach ($coba as $song)
                <li class="list-group-item d-flex justify-content-between align-middle">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ $song->judul }}</div>
                        {{ $song->pembuat }}
                    </div>
                    <a href="/{{ $song->id }}" class="mt-1"><button class="btn btn-primary">Detail</button></a>
                </li>
            @endforeach
        </ol>
    </div>
@endsection
