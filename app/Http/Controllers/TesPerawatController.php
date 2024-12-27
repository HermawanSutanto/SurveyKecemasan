<?php

namespace App\Http\Controllers;

use App\Models\PelaksanaTes;
use App\Models\hasil_tessrq;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesPerawatController extends Controller
{
    //
    public function show($test)
    {
        return view('tes.opsi',compact('test'));
    }
    public function showresult($test)
    {
        // Ambil data terbaru dari tabel hasil_tessrq
        $latestResult = DB::table('hasil_tessrq')
            ->orderBy('created_at', 'desc')
            ->first();

        // Pastikan data ditemukan, jika tidak redirect dengan pesan error
        if (!$latestResult) {
            return redirect()->route('tes.index')->with('error', 'Hasil tes tidak ditemukan.');
        }

        // Kirim data ke view
        return view('tes.tesresult', [
            'test' => $test,
            'nama_lengkap' => $latestResult->nama_lengkap,
            'hasil_tes' => $latestResult->hasil_tes,
            'interpretasi' => $latestResult->interpretasi,
            'penjelasan_hasil' => 'Penjelasan hasil ini dapat diubah sesuai kebutuhan.', // Penjelasan hasil dapat disesuaikan
        ]);
    }
    public function index($test)
    {
        return view('tes.formtesumum', compact('test'));
    }
    public function store(Request $request)
    {
    // Validasi input
    $validated = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'alamat' => 'nullable|string',
        'catatan' => 'nullable|string',
        'jenistes' => 'required|string', // Pastikan field ini ada di form
    ]);

    // Simpan data ke database
    PelaksanaTes::create($validated);
    
    // Redirect ke halaman tes berdasarkan tes yang dipilih
    return redirect("/tes/tes{$request->input('jenistes')}")->with('namalengkap', $request->input('nama_lengkap'));
    }
    
    public function showtes($jenistes)
    {
        // Tentukan view berdasarkan jenis tes
        $view = match ($jenistes) {
            'SRQ' => 'tes.tesSRQ',
            'BFI' => 'tes.tesBFI',
            'SAS' => 'tes.tesSAS',
            default => abort(404), // Jika jenis tes tidak ditemukan, tampilkan 404
        };

        return view($view);
    }
    public function storeSRQ(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'hasil_tes' => 'required|integer',
            'interpretasi' => 'required|string',
        ]);

        // Simpan data ke tabel tes
        DB::table('hasil_tessrq')->insert([
            'nama_lengkap' => $validated['nama_lengkap'],
            'hasil_tes' => $validated['hasil_tes'],
            'interpretasi' => $validated['interpretasi'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect dengan pesan sukses ke hasil tes
        return redirect()->route('tes.result', ['test' => 'SRQ'])
            ->with('success', 'Hasil tes berhasil disimpan.');
    }
    public function showriwayat($test)
    {
        // Peta model berdasarkan $test
        $models = [
            'SRQ' => \App\Models\hasil_tessrq::class,
            'BFI' => \App\Models\hasil_tesbfi::class,
            'SAS' => \App\Models\hasil_tessas::class,
            'SDQ' => \App\Models\hasil_tessdq::class,
        ];

        // Pastikan $test valid
        if (!array_key_exists($test, $models)) {
            return abort(404, 'Jenis tes tidak ditemukan');
        }

        // Ambil data menggunakan model yang sesuai
        $modelClass = $models[$test];
        $riwayatTes = $modelClass::get()->toArray(); // Ubah ke array

        // Debugging untuk memastikan format data
        // dd($riwayatTes);

        // Kembalikan view dengan data
        return view('tes.rekap', compact('riwayatTes', 'test'));
    }




}
