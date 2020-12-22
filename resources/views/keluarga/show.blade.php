@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Informasi Kartu Keluarga
                </div>
                <div class="card-body">
                    @include('keluarga._detail')
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span>Anggota Keluarga</span>
                    <a href="{{ route('keluarga.anggota.create', [$keluarga->id]) }}" class="btn float-right">
                        <i class="fas fa fa-plus-circle"></i>
                        <span>Tambah Anggota Keluarga</span> </a>
                </div>
                <div class="card-body">
                    @include('keluarga.anggota.index')
                </div>
            </div>

        </div>
    </div>
@endsection
