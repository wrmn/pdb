@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Daftar Penduduk</div>
                <div class="card-body">
                    <form action="" method="get">
                        <div class="col-lg-3 form-group">
                            <select name="nagari" id="nagari" class="form-control">
                                <option value="">==Pilih Nagari==</option>
                                @foreach($nagari as $ngr)
                                    <option value="{{ $ngr->id }}">{{ $ngr->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="col-lg-3">
                        <button class="btn btn-sm btn-primary form-control" type="submit">Submit</button>
                    </div>
                    </form>

                    @if(isset($_GET['nagari']))
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
                            @foreach($nagari as $penduduk)
                                <tr>
                                    <td>{{ $penduduk->id }}</td>
                                    <td>{{ $penduduk->id }}</td>
                                    <td>{{ $penduduk->id }}</td>
                                    <td>{{ $penduduk->id }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


