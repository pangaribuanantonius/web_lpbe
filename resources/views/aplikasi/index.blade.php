@extends('main')
@section('layout')


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Input Data</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Form Input Data</li>
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
                            <th>Nama Instansi</th>
                            <th>Nama Aplikasi</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Instansi</th>
                            <th>Nama Aplikasi</th>
                            <th>Tahun</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($aplikasi as $aps)
                        <tr>
                            <td>{{ $aps->aplikasi->nama_instansi }}</td>
                            <td>{{ $aps->nama_aplikasi }}</td>
                            <td>{{ $aps->tahun }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection