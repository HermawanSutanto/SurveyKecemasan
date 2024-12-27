<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        // Mengambil semua berita dari database
        $beritas = Berita::all();   
        
        // Mengirimkan data berita ke view
        return view('admin.daftarberita', compact('beritas'));
    }
    public function view()
    {
        // Mengambil semua berita dari database
        $beritas = Berita::all();   
        
        // Mengirimkan data berita ke view
        return view('berita', compact('beritas'));
    }

    public function create()
    {
        return view('admin.tambahberita');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required|date',
            'isi' => 'required',
            'penulis' => 'required|string|max:255',
            'referensi' => 'nullable|string|max:255',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('images', 'public');
            $validated['gambar'] = $gambarPath;
        }

        // Buat berita baru
        Berita::create($validated);

        // Redirect ke halaman daftar berita
        return redirect('/daftarberita')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Menampilkan berita berdasarkan ID
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }

    // Menampilkan form edit berita
    public function edit($id)
    {
        // Mengambil berita berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Mengirim data berita ke view
        return view('berita.edit', compact('berita'));
    }


    // Memperbarui berita
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            // Tambahkan validasi lain jika perlu
        ]);

        // Mengambil berita berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Update data berita
        $berita->judul = $request->input('judul');
        $berita->isi = $request->input('isi');
        // Update gambar dan field lainnya jika diperlukan

        // Simpan perubahan
        $berita->save();

        // Redirect kembali ke daftar berita
        return redirect('/daftarberita')->with('success', 'Berita berhasil diupdate.');
    }


    // Menghapus berita
    public function destroy($id)
    {
        // Find the berita by ID and delete it
        $berita = Berita::findOrFail($id);
        $berita->delete();

        // Redirect back with a success message
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
