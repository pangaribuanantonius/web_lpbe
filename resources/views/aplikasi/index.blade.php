@extends('main')
@section('layout')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Layanan Aplikasi</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Home/Layanan Aplikasi</li>
            <a href="{{ route('aplikasi.create') }}">Tambah Data Baru</a>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <!-- <i class="fas fa-table me-1"></i> -->
                <b>Form Data</b>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Nama Aplikasi</th>
                            <th>Nama Instansi</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aplikasi as $aps)
                        <tr>
                            <td>{{ $aps->nama_aplikasi }}</td>
                            <td>{{ $aps->aplikasi->nama_instansi }}</td>
                            <td>{{ $aps->tahun }}</td>
                            <td>
                                <div class="text-center">
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                </div>
                                <div class="text-center">
                                    <a href="#"><i class="fas fa-paper-plane text-success"></i></a>
                                </div>
                                <div class="text-center">
                                    <a href="#"><i class="fas fa-trash text-danger"></i></a>
                                </div>
                            </td>   
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection