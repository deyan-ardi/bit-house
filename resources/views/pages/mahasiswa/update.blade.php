@extends('layouts.app')

@section('title', 'Ubah Data')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h5 class="mt-5 mb-3">Manajemen Mahasiswa - Ubah Data</h5>
    <form action="{{ route('mahasiswa.update', [$mahasiswa->id]) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">Masukkan Nama</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $mahasiswa->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Masukkan NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" maxlength="10"
                value="{{ $mahasiswa->nim }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Masukkan Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ $mahasiswa->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
