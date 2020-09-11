@extends('layout.main')

@section('title', 'Mahasiswa')

@section('content')
<img class="background-img" src="/img/background.jpg">
    <div class="container mt-2">
        <h1>Daftar Mahasiswa</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Students as $mhs)
                <tr>
                    <th scope="row" data-label="No">{{ $loop->iteration }}</th>
                    <td data-label="Nama">{{ $mhs->nama }}</td>
                    <td data-label="NIM">{{ $mhs->nim }}</td>
                    <td data-label="Jurusan">{{ $mhs->jurusan }}</td>
                    <td data-label="Aksi">{{ $mhs->email }}</td>
                    <td>
                        <a href="/mahasiswa-{{ $mhs->id }}" class="customButton badge badge-primary">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection