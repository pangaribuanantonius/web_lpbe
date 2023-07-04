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
                <form method="post" action="{{ route('aplikasi.store')}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                          <!--   <div class="form-group">
                                <label>Nama Instansi</label>
                                <input type="text" name="" class="form-control" value="" required><br /> 
                            </div> -->
                            <input type="hidden" name="instansi_id" class="form-control" value=" {{ \App\Models\User::where('username', session('username'))->first()->instansi_id }}" readonly>
                            <div class="form-group">
                                <label>Nama Unit</label>
                                <input type="text" name="nama_unit" class="form-control" value="" required><br />
                            </div>
                            <div class="form-group">
                                <label>Nama Aplikasi</label>
                                <input type="text" name="nama_aplikasi" class="form-control" value="" required><br />
                            </div>
                            <div class="form-group">
                                <label>Kepemilikan</label>
                                <select name="kepemilikan" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Disediakan Pusat">Disediakan Pusat</option>
                                    <option value="Dikembangkan Sendiri">Dikembangkan Sendiri</option>
                                </select>
                                <br />
                            </div>
                             <div class="form-group">
                                <label>Platform</label><br />
                                <input type="checkbox" name="desktop" value="Desktop"> Desktop <br/>
                                <input type="checkbox" name="web" value="Web"> Web <br/>
                                <input type="checkbox" name="android" value="Android"> Android <br/>
                                <input type="checkbox" name="ios" value="iOs"> iOs <br/><br/>
                            </div>
                            <div class="form-group">
                                <label>Platform Lainnya (Opsional)</label>
                                <input type="text" name="platform" class="form-control" value="" placeholder="Masukkan Plarform lainnya jika ada"><br />
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" name="url" class="form-control" placeholder="Masukkan Alamat URL jika Ada" value=""><br />
                            </div>
                            <div class="form-group">
                                <label>Tempat Aplikasi</label>
                                <select name="tempataplikasi" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="OPD Mandiri TIK">OPD Mandiri TIK</option>
                                    <option value="Kominfostan">Kominfostan</option>
                                    <option value="Pusat">Pusat</option>
                                </select> <br />
                            </div>
                            <div class="form-group">
                                <label>Informasi</label>
                                <textarea type="text" name="informasi" class="form-control" value="" required></textarea><br />
                            </div>
                            <div class="form-group">
                                <label>Dasar Hukum</label>
                                <textarea type="text" name="dasarhukum" class="form-control" value="" required></textarea><br />
                            </div>
                            <div class="form-group">
                                <label>Sektor Pelayanan Publik</label>
                                <select name="sektorpelayananpublik" id="sektorpelayananpublik" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Pendidikan dan Pengajaran">1. Pendidikan dan Pengajaran</option>
                                    <option value="Pekerjaan dan Usaha">2. Pekerjaan dan Usaha</option>
                                    <option value="Tempat Tinggal">3. Tempat Tinggal</option>
                                    <option value="Komunikasi dan Informasi">4. Komunikasi dan Informasi</option>
                                    <option value="Lingkungan Hidup">5. Lingkungan Hidup</option>
                                    <option value="Kesehatan">6. Kesehatan</option>
                                    <option value="Jaminan Sosial">7. Jaminan Sosial</option>
                                    <option value="Energi">8. Energi</option>
                                    <option value="Perbankan">9. Perbankan</option>
                                    <option value="Perhubungan">10. Perhubungan</option>
                                    <option value="Sumber Daya Alam">11. Sumber Daya Alam</option>
                                    <option value="Pariwisata">12. Pariwisata</option>
                                    <option value="Sektor Lainnya">13. Sektor Lainnya</option>
                                </select>
                            </div>

                            <div id="nama" class="form-group" style="display:none;">
                                <label for="sektorpelayananpublik"></label>
                                <input type="text" name="sektorpelayananpublik2" class="form-control" placeholder="Masukkan Disini">
                            </div>

                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
                            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
                            <script>        
                                $('#sektorpelayananpublik').on('change',function(){
                                   var selection = $(this).val();
                                   switch(selection){
                                    case "Sektor Lainnya":
                                    $("#nama").show()
                                    break;
                                    default:
                                    $("#nama").hide()
                                }
                            });
                        </script>
                        <br />

                                   


                                    <!-- <div class="form-group">
                                        <label>Sektor Pelayanan Publik Lainnya</label>
                                        <input type="text" name="" class="form-control" value="" required><br />
                                    </div> -->
                                    <div class="form-group">
                                        <label>Deskripsi Singkat</label>
                                        <textarea type="text" name="deskripsi" class="form-control" value="" required></textarea><br />
                                    </div>
                                    <div class="form-group">
                                        <label>Fitur Utama</label>
                                        <textarea name="fiturutama" class="form-control" value="" required></textarea><br />
                                    </div>
                                     <div class="form-group">
                                        <label>Pengguna</label>
                                       <select name="pengguna" id="pengguna" class="form-control" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="Masyarakat">Masyarakat</option>
                                            <option value="ASN">ASN</option>
                                            <option value="Masyarakat dan ASN">Masyarakat dan ASN</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>

                                    <div id="masukkan" class="form-group" style="display:none;">
                                        <label for="pengguna"></label>
                                        <input type="text" name="pengguna2" class="form-control" placeholder="Masukkan Disini">
                                    </div>

                                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
                                    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
                                    <script>        
                                        $('#pengguna').on('change',function(){
                                           var selection = $(this).val();
                                           switch(selection){
                                            case "Lainnya":
                                            $("#masukkan").show()
                                            break;
                                            default:
                                            $("#masukkan").hide()
                                        }
                                    });
                                </script>
                                <br />
                                    <div class="form-group">
                                        <label>Daftar Layanan</label>
                                        <input type="text" name="daftarlayanan" class="form-control" value="" required><br />
                                    </div>
                                    <div class="form-group">
                                        <label>Daftar Produk Layanan</label>
                                        <input type="text" name="daftarproduklayanan" class="form-control" value="" required><br />
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Launching</label>
                                        <input type="date" name="launching" class="form-control" value="" required><br />
                                    </div>
                                    <div class="form-group">
                                        <label>Penanggung Jawab</label>
                                        <input type="text" name="penanggungjawab" class="form-control" value="" required><br />
                                    </div>
                                    <div class="form-group">
                                        <label>Kontak</label>
                                        <input type="text" name="kontak" class="form-control" value="" required><br />
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <select name="tahun" class="form-control">
                                            <option value="">-- Pilih Tahun --</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select><br />
                                    </div>
                                    <button class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Simpan</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>

@endsection