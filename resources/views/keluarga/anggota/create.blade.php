@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                {{ Form::open(['route'=> ['keluarga.anggota.store', $keluarga->id]]) }}
                    <div class="card-header">Input Data</div>

                    <div class="card-body">
                        @include('keluarga.anggota._form')
                    </div>

                    <div class="card-footer">
                        <input type="submit" value="save" class="btn btn-primary">
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
