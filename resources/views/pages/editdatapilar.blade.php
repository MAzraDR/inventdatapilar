@extends('partials.master')

@section('content')
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-8 col-md-6 p-4 border border-success rounded-3 bg-white">
            <h2 class="text-center">Edit Data Pilar</h2>
            <form action="{{ route('pilar.update', $dataPilar->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- No. Pilar -->
                <div class="mb-3">
                    <label for="no_pilar" class="form-label">No. Pilar</label>
                    <input type="text" class="form-control" id="no_pilar" name="no_pilar" value="{{ old('no_pilar', $dataPilar->no_pilar) }}" required>
                </div>

                <!<!-- Kecamatan -->
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <select class="form-select" id="kecamatan" name="kecamatan" required>
                            <option value="">Pilih Kecamatan</option>
                            <option value="Blimbing" {{ $dataPilar->kecamatan == 'Blimbing' ? 'selected' : '' }}>Kecamatan Blimbing</option>
                            <option value="Kedungkandang" {{ $dataPilar->kecamatan == 'Kedungkandang' ? 'selected' : '' }}>Kecamatan Kedungkandang</option>
                            <option value="Klojen" {{ $dataPilar->kecamatan == 'Klojen' ? 'selected' : '' }}>Kecamatan Klojen</option>
                            <option value="Lowokwaru" {{ $dataPilar->kecamatan == 'Lowokwaru' ? 'selected' : '' }}>Kecamatan Lowokwaru</option>
                            <option value="Sukun" {{ $dataPilar->kecamatan == 'Sukun' ? 'selected' : '' }}>Kecamatan Sukun</option>
                        </select>
                    </div>

                    <!-- Kelurahan -->
                    <div class="mb-3">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <select class="form-select" id="kelurahan" name="kelurahan" required>
                            <option value="">Pilih Kelurahan</option>
                        </select>
                    </div>


                    <!-- Lokasi Pilar -->
                    <div class="mb-3">
                        <label for="lokasi_pilar" class="form-label">Lokasi Pilar</label>
                        <input type="text" class="form-control" id="lokasi_pilar" name="lokasi_pilar" value="{{ old('lokasi_pilar', $dataPilar->lokasi_pilar) }}" required>
                    </div>

                    <!-- Koordinat X dan Y -->
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="koordinat_x" class="form-label">Koordinat X</label>
                                <input type="text" class="form-control" id="koordinat_x" name="koordinat_x" value="{{ old('koordinat_x', $dataPilar->koordinat_x) }}" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="koordinat_y" class="form-label">Koordinat Y</label>
                                <input type="text" class="form-control" id="koordinat_y" name="koordinat_y" value="{{ old('koordinat_y', $dataPilar->koordinat_y) }}" required>
                            </div>
                        </div>
                    </div>

                    <!-- Kondisi Pilar -->
                    <div class="mb-3">
                        <label for="kondisi" class="form-label">Kondisi Pilar</label>
                        <select class="form-select" id="kondisi" name="kondisi" required>
                            <option value="">Pilih Kondisi</option>
                            <option value="Baik" {{ $dataPilar->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Rusak Ringan" {{ $dataPilar->kondisi == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                            <option value="Rusak Berat" {{ $dataPilar->kondisi == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
                            <option value="Hilang" {{ $dataPilar->kondisi == 'Hilang' ? 'selected' : '' }}>Hilang</option>
                        </select>
                    </div>

                    <!-- Keterangan -->
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ old('keterangan', $dataPilar->keterangan) }}" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi', $dataPilar->deskripsi) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection