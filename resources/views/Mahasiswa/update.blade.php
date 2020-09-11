@extends('layout.main')

@section('title', 'Update Data')

@section('visibility','invisible')

@section('content')
<img class="background-img" src="/img/background.jpg">
<div class="container centerItem formDesign scrollable">
    <form method="POST" action="/mahasiswa-{{ $student->id }}">
        @method('patch')
        @csrf
        <p class="centerTitle"> Update Data</p>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $student->nama }}">
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $student->nim }}">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $student->jurusan }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $student->email }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="Alamat"  value="{{ $student->Alamat }}">
        </div>
        <div class="form-group">
            <label for="Agama">Agama</label>
            <input type="text" class="form-control" id="Agama" name="Agama"  value="{{ $student->Agama }}">
        </div>
        <div class="form-group">
            <label for="JenisKelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="JenisKelamin" name="JenisKelamin"  value="{{ $student->JenisKelamin }}">
        </div>
        <div class="form-group">
            <label for="TempatLahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="TempatLahir" name="TempatLahir"  value="{{ $student->TempatLahir }}">
        </div>
        <div class="form-group">
            <label for="TanggalLahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="TanggalLahir" name="TanggalLahir"  value="{{ $student->TanggalLahir }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/mahasiswa-{{$student->id}}"> Kembali </a>
    </form>   
</div>
@endsection