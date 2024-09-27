@extends('partials.master')

@section('content')
@if(Auth::check())
<div class="container mt-5">
    <div class="row d-flex justify-content-center ">
        <div class="col-8 col-md-6 p-4 border border-success rounded-3 bg-white">
            <h2 class="text-center">Form Data Pilar</h2>
            <form action="{{route('pilar.store')}}" method="POST" id="pilarForm">
                @csrf
                <div class="mb-3">
                    <label for="no_pilar" class="form-label">No. Pilar</label>
                    <input type="text" class="form-control" id="no_pilar" name="no_pilar" required>
                </div>

                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-select" id="kecamatan" name="kecamatan" required>
                        <option value="">Pilih Kecamatan</option>
                        <option value="Blimbing">Kecamatan Blimbing</option>
                        <option value="Kedungkandang">Kecamatan Kedungkandang</option>
                        <option value="Klojen">Kecamatan Klojen</option>
                        <option value="Lowokwaru">Kecamatan Lowokwaru</option>
                        <option value="Sukun">Kecamatan Sukun</option>
                    </select>
                </div>

                <!-- Kelurahan 1 dan 2 (diambil dari JavaScript) -->
                <div class="mb-3">
                    <label for="kelurahan_1" class="form-label">Kelurahan 1</label>
                    <select class="form-select" id="kelurahan_1" name="kelurahan_1" required>
                        <option value="">Pilih Kelurahan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="kelurahan_2" class="form-label">Kelurahan 2 (Opsional)</label>
                    <select class="form-select" id="kelurahan_2" name="kelurahan_2">
                        <option value="">Pilih Kelurahan (Optional)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="lokasi_pilar" class="form-label">Lokasi Pilar</label>
                    <input type="text" class="form-control" id="lokasi_pilar" name="lokasi_pilar" required>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="koordinat_x" class="form-label">Koordinat X</label>
                            <input type="text" class="form-control" id="koordinat_x" name="koordinat_x" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="koordinat_y" class="form-label">Koordinat Y</label>
                            <input type="text" class="form-control" id="koordinat_y" name="koordinat_y" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi Pilar</label>
                    <select class="form-select" id="kondisi" name="kondisi" required>
                        <option value="">Pilih Kondisi</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak Ringan">Rusak Ringan</option>
                        <option value="Rusak Berat">Rusak Berat</option>
                        <option value="Hilang">Hilang</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

@else
    <h3 class="text-center">You Need To Login First To Input Data</h1>
@endif

<script>
   
</script>

@endsection
