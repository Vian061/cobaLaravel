@extends('layout.main')

@section('title', 'Insert Data')

@section('visibility','invisible')

@section('content')
<img class="background-img" src="/img/background.jpg">
<div class="container centerItem formDesign scrollable" >
    
    <p class="centerTitle"> Insert Data</p>
    <form method="post" action="/mahasiswa">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"  name="nama" value="{{ old('nama') }}">
            @error('nama')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"  name="nim" value="{{ old('nim') }}">
            @error('nim')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"  name="jurusan" value="{{ old('jurusan') }}">
            @error('jurusan')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="alamat"  name="Alamat" value="{{ old('Alamat') }}">
            @error('Alamat')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" class="form-control @error('Agama') is-invalid @enderror" id="agama" name="Agama" value="{{ old('Agama') }}">
            @error('Agama')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="JenisKelamin">Jenis Kelamin</label>
            <input type="text" class="form-control @error('JenisKelamin') is-invalid @enderror" id="JenisKelamin" name="JenisKelamin" value="{{ old('JenisKelamin') }}">
            @error('JenisKelamin')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="TempatLahir">Tempat Lahir</label>
            <input type="text" class="form-control @error('TempatLahir') is-invalid @enderror" id="TempatLahir" name="TempatLahir" value="{{ old('TempatLahir') }}">
            @error('TempatLahir')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="TanggalLahir">Tanggal Lahir</label>
            <input type="date" class="form-control @error('TanggalLahir') is-invalid @enderror" id="TanggalLahir" name="TanggalLahir" value="{{ old('TanggalLahir') }}">
            @error('TanggalLahir')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/mahasiswa"> Kembali </a>
    </form>   
</div>
@endsection