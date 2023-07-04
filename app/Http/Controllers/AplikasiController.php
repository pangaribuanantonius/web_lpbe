<?php

namespace App\Http\Controllers;
use App\Models\Aplikasi;
use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function index($instansi_id){
        $instansi_id = request('instansi_id');
        $tahun = request('tahun');
        $aplikasi = Aplikasi::Where('instansi_id', $instansi_id)->Where('tahun', $tahun)->get();
        return view('aplikasi.index', ['aplikasi' => $aplikasi]);
    }

    public function create(){
        return view('aplikasi.create');
    }

    public function store(Request $request){
            \App\Models\Aplikasi::create([
                'id' => \Str::random(8),
                'instansi_id' => $request->instansi_id,
                'nama_unit' => $request->nama_unit,
                'nama_aplikasi' => $request->nama_aplikasi,
                'kepemilikan' => $request->kepemilikan,
                'desktop' => $request->desktop,
                'web' => $request->web,
                'android' => $request->android,
                'ios' => $request->ios,
                'platform' => $request->platform,
                'url' => $request->url,
                'tempataplikasi' => $request->tempataplikasi,
                'informasi' => $request->informasi,
                'dasarhukum' => $request->dasarhukum,
                'sektorpelayananpublik' => $request->sektorpelayananpublik,
                'sektorpelayananpublik2' => $request->sektorpelayananpublik2,
                'deskripsi' => $request->deskripsi,
                'fiturutama' => $request->fiturutama,
                'pengguna' => $request->pengguna,
                'pengguna2' => $request->pengguna2,
                'daftarlayanan' => $request->daftarlayanan,
                'daftarproduklayanan' => $request->daftarproduklayanan,
                'launching' => $request->launching,
                'penanggungjawab' => $request->penanggungjawab,
                'kontak' => $request->kontak,
                'tahun' => $request->tahun,
            ]);
       
        return redirect('aplikasi/create');
    }
}
