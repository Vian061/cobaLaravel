@extends('layout.main')

@section('title', 'About Me')
@section('visibility', 'invisible')

@section('content')
    <div class="container mt-2 mb-2 d-flex align-items-center" style="height: 90vh">
        <p class="mx-auto container mt-4" style="width: 350px;">Hello, My name is {{$name}}</p>
    </div>
@endsection