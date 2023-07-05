@extends('main')
@section('layout')


<main>
    <div class="container">
        <h1 class="mt-4">Aplikasi Layanan SPBE</h1>
        <ol class="breadcrumb mb-4">
            <!-- <li class="breadcrumb-item active">Aplikasi</li> -->
        </ol>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">2022</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ url('/aplikasi/HqlyQ4Q4?tahun=2023') }}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Warning Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Success Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Danger Card</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card mx-auto mb-3 mt-3" style="width:50rem;">
                <div class="card-header bg-white">
                    <b>Layanan SPBE</b>
                </div>
                <div class="card-body">
                    <form method="get" action="{{ route('layanan.index') }}" enctype="multipart/form-data">
                        <label>Pilih Layanan</label>
                        <select name="layanan" class="form-control">
                            <option value="" class="form-control"></option>
                            <option value="aplikasi" class="form-control">Layanan Aplikasi</option>
                            <option value="spbe" class="form-control">Layanan Peta Rencana SPBE</option>
                            <option value="Layanan Smart City" class="form-control">Layanan Smart City</option>
                        </select><br />
                        <label>Pilih Tahun</label>
                        <select name="tahun" class="form-control">
                            <option value="" class="form-control"></option>
                            <option value="2022" class="form-control">2022</option>
                            <option value="2023" class="form-control">2023</option>
                            <option value="2024" class="form-control">2024</option>
                        </select> <br />
                        <a href="#">
                            <button>Konfirmasi</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
