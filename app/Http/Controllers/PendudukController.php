<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use App\Models\Kewarganegaraan;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use function PHPUnit\Framework\containsIdentical;

class PendudukController extends Controller
{
    public function destroy(Penduduk $penduduk){
        $penduduk->delete();

        return redirect(route('penduduk.index'));
    }

    public function index(){
        $penduduks = Penduduk::with('keluarga')->paginate(15);

        return view('penduduk.index', compact('penduduks'));
    }

    public function create(){
        $kwns = Kewarganegaraan::all();
        $kerjas = Pekerjaan::all();
        $pendidikans = LevelPendidikan::all();
        $keluarga = KartuKeluarga::with('penduduks')->get();
        $genders = config('central.gender');
        $agama = config('central.agama');
        $status_pernikahan = config('central.status_pernikahan');
        $status_keluarga = config('central.status_keluarga');

        return view('keluarga.anggota.create', compact(
            'kwns',
            'kerjas',
            'genders',
            'pendidikans',
            'keluarga',
            'agama',
            'status_keluarga',
            'status_pernikahan',
        ));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'kwn' => 'required',
            'agama' => 'required',
            'status_keluarga' => 'required',
            'status_pernikahan' => 'required',
            'tempat_lahir'=> 'required',
            'tanggal_lahir'=> 'required',
            'ayah' => 'required',
            'ibu' => 'required',
            'keluarga' => 'required',
        ]);

        $insert = Penduduk::create([
            'nama' => request('nama'),
            'nik' => request('nik'),
            'jenis_kelamin' => request('jenis_kelamin'),
            'pekerjaan_id' => request('pekerjaan'),
            'level_pendidikan_id' => request('pendidikan'),
            'Kewarganegaraan_id' => request('kwn'),
            'agama' => request('agama'),
            'status_keluarga' => request('status_keluarga'),
            'status_pernikahan' => request('status_pernikahan'),
            'tempat_lahir'=> request('tempat_lahir'),
            'tanggal_lahir'=> request('tanggal_lahir'),
            'ayah' => request('ayah'),
            'ibu' => request('ibu'),
            'keluarga_id' => request('keluarga')
        ]);


        session()->flash('success', 'Berhasil Menambahkan data');
        return redirect()->route('penduduk.index');
    }

    public function edit(){

    }

    public function update(){

    }

}
