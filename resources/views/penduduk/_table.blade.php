<table class="table table-responsive-sm table-bordered">
    <thead>
    <tr>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No KK</th>
        <th>Aksi</th>
    </tr>
    </thead>

    <tbody>
    @foreach($penduduks as $penduduk)
        <tr>
            <td>{{ $penduduk->nik }}</td>
            <td>{{ $penduduk->nama }}</td>
            <td>{{ $penduduk->tempat_lahir }}</td>
            <td>{{ $penduduk->tanggal_lahir }}</td>
            <td>{{ $penduduk->keluarga->no }}</td>
            <td>
                <form action="{{ route('penduduk.destroy',[$penduduk->id]) }}"
                      method="POST">
                    <a href="{{ route('penduduk.show', [$penduduk->id]) }}" class="btn btn-sm btn-info" type="button">
                        <i class="fas fa fa-info"></i></a>

                    <a href="{{ route('penduduk.edit', [$penduduk->id]) }}" class="btn btn-sm btn-success" type="button">
                        <i class="fas fa fa-edit"></i></a>


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
