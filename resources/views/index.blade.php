@extends('layout/main')

@section('title', 'Home')

@section('visibility', 'invisible')

@section('content')
    <div class="container mt-2 mb-2 d-flex align-items-center" style="height: 90vh">
        <h1 class="mx-auto container mt-4" style="width: 60%;"> Welcome, {{$name}} </h1>
    </div>
@endsection