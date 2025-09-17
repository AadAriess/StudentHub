<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;

class DataMahasiswaController extends Controller
{
    /**
     * Menampilkan form input data mahasiswa.
     */
    public function create()
    {
        return view('data_mahasiswa.create');
    }

    /**
     * Menyimpan data mahasiswa ke database.
     */
    public function store(Request $request)
    {
        // Validasi dan pengecekan unique key
        $validated = $request->validate([
            'nama_lengkap' => 'required',
            'no_ktp' => 'required|unique:data_mahasiswas,no_ktp',
            'alamat_rumah' => 'required',
            'alamat_email' => 'required|email|unique:data_mahasiswas,alamat_email',
            'nomor_hp' => 'required',
        ], [
            // Pesan error kustom
            'no_ktp.unique' => 'Nomor KTP sudah terdaftar.',
            'alamat_email.unique' => 'Alamat Email sudah terdaftar.',
        ]);

        // Simpan data ke database
        DataMahasiswa::create($validated);

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->back()->with('success', 'Data mahasiswa berhasil disimpan!');
    }
}
