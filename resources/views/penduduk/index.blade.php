@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Daftar Seluruh Penduduk
                <a href="{{ route('penduduk.create') }}" class="btn float-right">
                    <i class="fas fa fa-plus-circle"></i>
                    <span>Tambah Penduduk</span> </a>
            </div>
            <div class="card-body">
                @include('penduduk._table')
                {{ $penduduks->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
