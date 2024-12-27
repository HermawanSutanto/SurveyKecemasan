<?php

namespace App\Http\Controllers;

use App\Models\Edukasi; // Make sure to import your Edukasi model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EdukasiController extends Controller
{
    public function index()
    {
        // Mengambil semua berita dari database
        $edukasis = Edukasi::all();   
        
        // Mengirimkan data berita ke view
        return view('admin.daftaredukasi', compact('edukasis'));
    }
    // Display the form for creating a new Edukasi
    public function create()
    {
        return view('tambah-edukasi'); // Change this to your view file for adding edukasi
    }
    public function view()
    {
        // Mengambil semua berita dari database
        $edukasis = Edukasi::all();   
        
        // Mengirimkan data berita ke view
        return view('edukasi', compact('edukasis'));
    }
    // Store a newly created Edukasi in storage
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'tanggal' => 'required|date',
        'isi' => 'required|string',
        'penulis' => 'required|string|max:255',
        'referensi' => 'nullable|string|max:255',
    ]);

    $edukasi = new Edukasi();
    $edukasi->judul = $request->judul;
    $edukasi->tanggal = $request->tanggal;
    $edukasi->isi = $request->isi;
    $edukasi->penulis = $request->penulis;
    $edukasi->referensi = $request->referensi;

    // Handle file upload
    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('edukasi_images', 'public');
        $edukasi->gambar = $path;
    }

    $edukasi->save();

    return redirect('/daftaredukasi')->with('success', 'Edukasi berhasil ditambahkan!');
}


    // Display the specified Edukasi
    public function show($id)
    {
        $edukasi = Edukasi::findOrFail($id);
        return view('edukasi.show', compact('edukasi')); // Change to your view for showing edukasi
    }

    // Show the form for editing the specified Edukasi
    public function edit($id)
    {
        // Mengambil edukasi berdasarkan ID
        $edukasi = Edukasi::findOrFail($id);

        // Mengirim data edukasi ke view
        return view('edukasi.edit', compact('edukasi'));    
    }

    // Update the specified Edukasi in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'isi' => 'required|string',
            'penulis' => 'required|string|max:255',
            'referensi' => 'nullable|string|max:255',
        ]);
        $edukasi = Edukasi::findOrFail($id);

        $edukasi->judul = $request->judul;
        $edukasi->isi = $request->isi;
        $edukasi->penulis = $request->penulis;
        $edukasi->referensi = $request->referensi;

        // Handle file upload
        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($edukasi->gambar) {
                Storage::disk('public')->delete($edukasi->gambar);
            }
            $path = $request->file('gambar')->store('edukasi_images', 'public');
            $edukasi->gambar = $path;
        }

        $edukasi->save();

        return redirect('/daftaredukasi')->with('success', 'Edukasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Find the berita by ID and delete it
        $edukasi = Edukasi::findOrFail($id);
        $edukasi->delete();

        // Redirect back with a success message
        return redirect()->route('edukasi.index')->with('success', 'Edukasi berhasil dihapus.');
    }

    
}
