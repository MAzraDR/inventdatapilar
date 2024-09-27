<?php

namespace App\Http\Controllers;

use App\Models\DataPilar;
use Illuminate\Http\Request;

class DatapilarController extends Controller
{
    public function index()
    {
        // Ambil semua data pilar dari database
        $dataPilar = DataPilar::all(); // Pastikan DataPilar adalah model yang benar

        // Kirim data ke view
        return view('pages.DataKecamatan.semuakec', compact('dataPilar'));
    }

    public function create()
    {
        return view('pages.inputdata');
    }

    // Menyimpan data pilar ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'no_pilar' => 'required|string|max:255',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'lokasi_pilar' => 'required|string',
            'koordinat_x' => 'required|string',
            'koordinat_y' => 'required|string',
            'kondisi' => 'required|string',
            'keterangan' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        // Insert data ke database
        $dataPilar = new DataPilar;
        $dataPilar->no_pilar = $request->no_pilar;
        $dataPilar->kecamatan = $request->kecamatan;
        $dataPilar->kelurahan = $request->kelurahan;
        $dataPilar->lokasi_pilar = $request->lokasi_pilar;
        $dataPilar->koordinat_x = $request->koordinat_x;
        $dataPilar->koordinat_y = $request->koordinat_y;
        $dataPilar->kondisi = $request->kondisi;
        $dataPilar->keterangan = $request->keterangan;
        $dataPilar->deskripsi = $request->deskripsi;


        $dataPilar->save();

        return redirect()->route('pilar.create')->with('success', 'Data Pilar berhasil ditambahkan.');
    }

    // Menampilkan halaman edit data pilar
    public function edit($id)
    {
        $dataPilar = DataPilar::findOrFail($id);
        return view('pages.editdatapilar', compact('dataPilar'));
    }

    // Update data pilar
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'no_pilar' => 'required|string|max:255',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'lokasi_pilar' => 'required|string',
            'koordinat_x' => 'required|string',
            'koordinat_y' => 'required|string',
            'kondisi' => 'required|string',
            'keterangan' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        // Update data ke database
        $dataPilar = DataPilar::findOrFail($id);
        $dataPilar->no_pilar = $request->no_pilar;
        $dataPilar->kecamatan = $request->kecamatan;
        $dataPilar->kelurahan = $request->kelurahan;
        $dataPilar->lokasi_pilar = $request->lokasi_pilar;
        $dataPilar->koordinat_x = $request->koordinat_x;
        $dataPilar->koordinat_y = $request->koordinat_y;
        $dataPilar->kondisi = $request->kondisi;
        $dataPilar->keterangan = $request->keterangan;
        $dataPilar->deskripsi = $request->deskripsi;

        $dataPilar->save();

        return redirect()->route('pilar.index')->with('success', 'Data Pilar berhasil diupdate.');
    }

    // Hapus data pilar
    public function destroy($id)
    {
        $dataPilar = DataPilar::findOrFail($id);
        $dataPilar->delete();

        return redirect()->route('pilar.index')->with('success', 'Data Pilar berhasil dihapus.');
    }

    public function showBlimbing()
    {
        $dataPilar = DataPilar::where('kecamatan', 'Blimbing')->get();
        return view('pages.DataKecamatan.kecblimbing', compact('dataPilar'));
    }

    public function showKedungkandang()
    {
        $dataPilar = DataPilar::where('kecamatan', 'Kedungkandang')->get();
        return view('pages.DataKecamatan.keckedungkandang', compact('dataPilar'));
    }

    public function showKlojen()
    {
        $dataPilar = DataPilar::where('kecamatan', 'Klojen')->get();
        return view('pages.DataKecamatan.kecklojen', compact('dataPilar'));
    }

    public function showLowokwaru()
    {
        $dataPilar = DataPilar::where('kecamatan', 'Lowokwaru')->get();
        return view('pages.DataKecamatan.keclowokwaru', compact('dataPilar'));
    }

    public function showSukun()
    {
        $dataPilar = DataPilar::where('kecamatan', 'Sukun')->get();
        return view('pages.DataKecamatan.kecsukun', compact('dataPilar'));
    }
}
