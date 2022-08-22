@extends('layouts.app')

@section('title', 'Manajemen Mahasiswa')

@section('content')


    <h5 class="mt-5 mb-3">Manajemen Mahasiswa</h5>
    @if (Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-4">Tambah Data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($mahasiswa->count() <= 0)
                <tr>
                    <td colspan="5" class="text-center">Data Kosong</td>
                </tr>
            @else
                @foreach ($mahasiswa as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>
                            <form action="{{ route('mahasiswa.destroy', [$item->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                {{-- Update Data --}}
                                <a href="{{ route('mahasiswa.edit', [$item->id]) }}" class="btn btn-warning">Update
                                    Data</a>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#detailMahasiswa{{ $item->id }}">
                                    Detail Data
                                </button>

                                {{-- Delete Data --}}
                                <button type="submit" class="btn btn-danger">Delete Data</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    @foreach ($mahasiswa as $index => $item)
        <div class="modal fade" id="detailMahasiswa{{ $item->id }}" tabindex="-1"
            aria-labelledby="detailMahasiswaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailMahasiswaLabel">Detail Mahasiswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>Nama : {{ $item->nama }}</li>
                            <li>Nim : {{ $item->nim }}</li>
                            <li>Alamat : {{ $item->alamat }}</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
