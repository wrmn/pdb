<div class="card-body">
    <div class="form-group row">
        <div class="col-md-3">
            <label for="" class="col-form-label">Nomor Kartu Keluarga</label>
        </div>

        <div class="col-md-3">
            <label for="" class="col-form-label">{{ $keluarga->no }}</label>
        </div>

        <div class="col-md-3">
            <label for="" class="col-form-label">Tanggal Pencatatan</label>
        </div>

        <div class="col-md-3">
            <label for="" class="col-form-label">{{ $keluarga->tanggal_pencatatan }}</label>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3">
            <label for="" class="col-form-label">Nagari</label>
        </div>

        <div class="col-md-3">
            <label for="" class="col-form-label">{{ $keluarga->jorong->nagari->nama }}</label>
        </div>

        <div class="col-md-3">
            <label for="" class="col-form-label">Jorong</label>
        </div>

        <div class="col-md-3">
            <label for="" class="col-form-label">{{ $keluarga->jorong->nama }}</label>
        </div>
    </div>
</div>
