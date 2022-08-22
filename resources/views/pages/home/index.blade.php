@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/gambar.jpg') }}" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/gambar2.png') }}" class="d-block w-100" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/gambar3.jpg') }}" class="d-block w-100" alt="Gambar 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
