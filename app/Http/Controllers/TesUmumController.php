<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesUmumController extends Controller
{
    public function index($test)
    {
        return view("tes.tesumum{$test}", compact('test'));
    }
    public function storeSRQ(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'hasil_tes' => 'required|integer',
            'interpretasi' => 'required|string',
            'test' => 'required|string', // Menyimpan tipe tes
        ]);

        // Simpan data ke session
        session([
            'hasil_tes' => $validated['hasil_tes'],
            'interpretasi' => $validated['interpretasi'],
            'test' => $validated['test'],
        ]);

        // Redirect ke halaman hasil tes
        return redirect()->route('tes.resultumum');
    }


    public function showresult()
    {
        // Ambil data dari session
        $hasilTes = session('hasil_tes');
        $interpretasi = session('interpretasi');
        $test = session('test');

        // Pastikan data tersedia
        if (!$hasilTes || !$interpretasi || !$test) {
            return redirect()->route('tes')->with('error', 'Data hasil tes tidak ditemukan.');
        }

        // Kirim data ke view
        return view('tes.tesresult', [
            'nama_lengkap'=>'',
            'test' => $test,
            'hasil_tes' => $hasilTes,
            'interpretasi' => $interpretasi,
            'penjelasan_hasil' => 'Penjelasan hasil ini dapat diubah sesuai kebutuhan.', // Penjelasan hasil dapat disesuaikan
        ]);
    }

}
