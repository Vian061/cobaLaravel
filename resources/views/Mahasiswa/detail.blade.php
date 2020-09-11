@extends('layout.main')

@section('title', 'Update Data')

@section('visibility','invisible')

@section('content')
<img class="background-img" src="/img/background.jpg">
    <div class="container mt-3 centerItem">
        <div class="card">
            <div class="card-body">
                <p class="centerTitle"> Manage Mahasiswa </p>
                <h5 class="card-title"> Mahasiswa </h5>

                <a> Nama : {{ $student->nama}} <br> </a>
                <a> NIM : {{ $student->nim}} <br> </a>
                <a> Jurusan : {{ $student->jurusan}} <br> </a>
                <a> Email : {{ $student->email}} <br> </a>
                <a> Alamat : {{ $student->Alamat}} <br> </a>
                <a> Agama : {{ $student->Agama}} <br> </a>
                <a> Tempat Lahir : {{ $student->TempatLahir}} <br> </a>
                <a> Tanggal Lahir : {{ $student->TanggalLahir}} <br></a>
                <a> Jenis Kelamin : {{ $student->JenisKelamin}} <br> </a>
                <br>

                <form class="d-inline" action="/mahasiswa-update-{{ $student->id}}" method="get">
                    <button type="submit" class="btn btn-success"> Edit</button>
                </form>
                
                <form class="d-inline" action="/mahasiswa-{{ $student->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger"> Delete </button>
                </form>
                <a class="ml-2" href="/mahasiswa"> Kembali </a>
            </div>
          </div>

    </div>
@endsection