<?php

namespace App\Http\Controllers;

use App\Models\LevelPendidikan;
use App\Models\Nagari;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use PhpParser\Builder;

class LaporanController extends Controller
{
    public function index(){
        $nagari = Nagari::all();

        return view('laporan.index', compact('nagari'));
    }

    public function cariNagari($nagari){
        dd($nagari);
        return view('laporan.index', compact('nagari'));
    }

    public function productive(){
        $penduduks = Penduduk::productive()->paginate(10);
        $countPenduduk = Penduduk::productive()->get();
        $count = 0;
        foreach ($countPenduduk as $penduduk){
            $penduduk;
            $count++;
        }

        return view('laporan.productive', compact('penduduks', 'count'));
    }

    public function educate(){
        $educate = Penduduk::where('level_pendidikan_id', 1)->orWhere('level_pendidikan_id', 2)->orWhere('level_pendidikan_id', 3)->paginate(10);
        $educates = Penduduk::where('level_pendidikan_id', 1)->orWhere('level_pendidikan_id', 2)->orWhere('level_pendidikan_id', 3)->get();
        $count = 0;

        foreach ($educates as $e){
            $e;
            $count++;
        }

        return view('laporan.education', compact('educate', 'count'));
    }


}
