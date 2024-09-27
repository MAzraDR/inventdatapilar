@extends('partials.master')

@section('content')
<div class="container-fluid">
    <!-- Introduction Section -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title fw-bold mb-4">Introduction</h5>
            <p class="mb-0 fs-4 fw-semibold">
                Selamat datang di Sistem Inventarisasi Pilar Batas Kota Malang. Website ini menyediakan informasi
                terperinci mengenai lokasi dan kondisi pilar batas antar kecamatan di Kota Malang. Dengan data yang
                telah diverifikasi dan diupdate secara berkala, platform ini bertujuan untuk mempermudah proses
                pemantauan, pemeliharaan, dan perencanaan batas wilayah yang lebih efisien.
            </p>
        </div>
    </div>

    <!-- Kecamatan Section -->
    <div class="row">
        @php
        $kecamatanData = [
        ['name' => 'Blimbing', 'image' => 'Blimbing.png', 'route' => 'pilar.blimbing'],
        ['name' => 'Kedungkandang', 'image' => 'Kedungkandang.png', 'route' => 'pilar.kedungkandang'],
        ['name' => 'Klojen', 'image' => 'Klojen.png', 'route' => 'pilar.klojen'],
        ['name' => 'Lowokwaru', 'image' => 'Lowokwaru.png', 'route' => 'pilar.lowokwaru'],
        ['name' => 'Sukun', 'image' => 'Sukun.png', 'route' => 'pilar.sukun'],
        ];
        @endphp

        <div class="col-8">
            <div class="row">
                @foreach($kecamatanData as $kecamatan)
                <div class="col-md-5 mb-4">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{ asset('images/Kec_Image/' . $kecamatan['image']) }}" class="card-img-top"
                            alt="Gambar {{ $kecamatan['name'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $kecamatan['name'] }}</h5>
                            <a href="{{ route($kecamatan['route']) }}" class="btn btn-success">Data Pilar</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-4">
            <!-- Dashboard Statistics Section -->
            <div class="row">
                <!-- Total Boundary Markers -->
                <div class="col">
                    <div class="card text-dark">
                        <div class="card-header bg-success text-white fw-bold fs-5">Total Data Pilar</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $totalPillars }}</h5>
                            <p class="card-text">Jumlah Data Pilar yang terdaftar.</p>
                        </div>
                    </div>
                </div>

                <!-- Pillar Conditions Breakdown -->
                <div class="col">
                    <div class="card text-dark">
                        <div class="card-header bg-success text-white fw-bold fs-5">Kondisi Pilar</div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($pillarsByCondition as $condition)
                                <li class="list-group-item d-flex justify-content-between align-items-center fs-4">
                                    {{ $condition->kondisi }}
                                    <span class="badge bg-success fs-4">{{ $condition->total }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Last Updated -->
                <div class="col">
                    <div class="card text-dark">
                        <div class="card-header bg-success text-white fw-bold fs-5">Last Updated</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $lastUpdated }}</h5>
                            <p class="card-text">Date of the latest data update.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection