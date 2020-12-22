<div class="card-body">
    <table class="table table-responsive-md table-bordered table-stripped">
        <thead>
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Status</th>
            <th>Status Pernikahan</th>
            <th>Aksi</th>
        </tr>
        </thead>

        <tbody>
        @foreach($keluarga->penduduks as $penduduk)
            <tr>
                <td>{{ $penduduk->nik }}</td>
                <td>{{ $penduduk->nama }}</td>
                <td>{{ $penduduk->tempat_lahir }}</td>
                <td>{{ $penduduk->tanggal_lahir }}</td>
                <td>{{ $penduduk->status_keluarga }}</td>
                <td>{{ $penduduk->status_pernikahan }}</td>
                <td>
                    <form action="{{ route('keluarga.anggota.destroy',[$keluarga->id ,$penduduk->id]) }}"
                          method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" onclick="return confirm('Hapus data ini?')"
                                class="btn btn-sm btn-danger">
                            <i class="fas fa fa-trash"></i></button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


