@extends('partials.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Data Pilar di Kecamatan Lowokwaru</h2>

    @if($dataPilar->isEmpty())
    <p class="text-center">Tidak ada data pilar di Kecamatan Lowokwaru</p>
    @else
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="myTable">
            <thead>
                <tr class="fs-2">
                    <th>No.</th>
                    <th>No. Pilar</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Lokasi Pilar</th>
                    <th>Koordinat X</th>
                    <th>Koordinat Y</th>
                    <th>Kondisi</th>
                    <th>Keterangan</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPilar as $index => $pilar)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pilar->no_pilar }}</td>
                    <td>{{ $pilar->kecamatan }}</td>
                    <td>{{ $pilar->kelurahan }}</td>
                    <td>{{ $pilar->lokasi_pilar }}</td>
                    <td>{{ $pilar->koordinat_x }}</td>
                    <td>{{ $pilar->koordinat_y }}</td>
                    <td>{{ $pilar->kondisi }}</td>
                    <td>{{ $pilar->keterangan }}</td>
                    <td>{{ $pilar->deskripsi }}</td>
                    @if(Auth::check())
                    <td class="d-flex">
                        <!-- Tombol Edit -->
                        <a href="{{ route('pilar.edit', $pilar->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('pilar.destroy', $pilar->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    @else
                    <td>-</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

    <a href="{{ route('pilar.index') }}" class="btn btn-success mt-3">Kembali ke Semua Data Pilar</a>
</div>
@endsection