@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Penduduk Usia Produktif Sebanyak {{ $count }}</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered">
                        <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($penduduks as $penduduk)
                            <tr>
                                <td>{{ $penduduk->nik }}</td>
                                <td>{{ $penduduk->nama }}</td>
                                <td>{{ $penduduk->tanggal_lahir }}</td>
                                <td>{{ $penduduk->tempat_lahir }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{ $penduduks->links() }}
                    </table>

                </div>
            </div>
        </div>
@endsection

