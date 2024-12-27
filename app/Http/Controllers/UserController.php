<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    // Menampilkan halaman register
    public function showRegisterForm()
    {
        $provinsi = Provinsi::all();  // Mengambil semua provinsi
        return view('auth.register', compact('provinsi'));
    }

    public function getProvinsi()
    {
        $provinsi = Provinsi::all();
        return response()->json($provinsi);
    }
    // Mendapatkan kota berdasarkan provinsi yang dipilih
    public function getKota(Request $request)
    {
        $kota = Kota::where('provinsi_id', $request->provinsi_id)->get();
        return response()->json($kota);
    }
    // Proses registrasi user baru
    public function register(Request $request)
{
    // Validate the input
    $validator = Validator::make($request->all(), [
        'nama_lengkap' => 'required|string|max:255',
        'nama_panggilan' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'email' => 'required|email|unique:users,email',
        'provinsi_id' => 'required|exists:provinsi,id',
        'kota_id' => 'required|exists:kota,id',
        'alamat' => 'required|string|max:500',
        'pekerjaan' => 'required|string|max:255',
        'no_wa' => 'required|string|max:255',
        'password' => 'required|string|min:8|confirmed',
        'deskripsi_diri' => 'required|string|max:1000',
    ]);

    // Handle validation failure
    if ($validator->fails()) {
        dump($validator);
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Create the user
    User::create([
        'nama_lengkap' => $request->nama_lengkap,
        'nama_panggilan' => $request->nama_panggilan,
        'tanggal_lahir' => $request->tanggal_lahir,
        'email' => $request->email,
        'provinsi_id' => $request->provinsi_id,
        'kota_id' => $request->kota_id,
        'alamat' => $request->alamat,
        'pekerjaan' => $request->pekerjaan,
        'no_wa' => $request->no_wa,
        'password' => Hash::make($request->password),
        'deskripsi_diri' => $request->deskripsi_diri,
        'foto_profil'=>'foto_profil/user.png',
        'status'=>'0'
    ]);

    // Redirect after registration
    return redirect('/login')->with('success', 'Registration successful! Please log in.');
}

    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Cek kredensial dan login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('welcome')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'email' => 'Kredensial tersebut tidak cocok dengan catatan kami.',
        ])->onlyInput('email');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logout berhasil!');
    }

    // Menampilkan halaman edit profil
    public function showEditProfileForm()
    {
        $user = Auth::user();
        $provinsi = Provinsi::all();
        $kota = Kota::where('provinsi_id', $user->provinsi_id)->get(); // Menampilkan kota berdasarkan provinsi user
        return view('auth.editprofile', compact('user', 'provinsi', 'kota'));
    }

    // Proses update profil
    public function updateProfile(Request $request)
{
    $user = Auth::user();

    // Validate profile input
    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'nama_panggilan' => 'required|string|max:255',
        'tanggal_lahir' => 'required|date',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'alamat' => 'required|string',
        'pekerjaan' => 'required|string|max:255',
        'no_wa' => 'required|string|max:15',
        'deskripsi_diri' => 'nullable|string',
        'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // File upload validation
    ]);

    // Update profile
    $user->update([
        'nama_lengkap' => $request->nama_lengkap,
        'nama_panggilan' => $request->nama_panggilan,
        'tanggal_lahir' => $request->tanggal_lahir,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'pekerjaan' => $request->pekerjaan,
        'no_wa' => $request->no_wa,
        'deskripsi_diri' => $request->deskripsi_diri,
    ]);

    // Handle profile picture upload
    if ($request->hasFile('foto_profil')) {
        if ($user->foto_profil) {
            Storage::delete($user->foto_profil); // Delete old picture if exists
        }
        
        // Store the file in the 'public' disk under 'foto_profil' directory
        $path = $request->file('foto_profil')->store('foto_profil', 'public');
        
        // Update user profile with new path
        $user->update(['foto_profil' => $path]);
    }


    return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui!');
}

        // Menampilkan halaman profil
    public function showProfile()
    {
        $user = Auth::user();
        $provinsi = Provinsi::all();  // Ambil semua provinsi dari database
        $kota = Kota::where('provinsi_id', $user->provinsi_id)->get(); // Ambil kota berdasarkan provinsi pengguna
        return view('auth.profile', compact('user', 'provinsi', 'kota'));
    }
        
    public function showUserProfiles()
    {
        // Get all users with status 1
        $users = User::where('status', 1)->get();
        
        return view('admin.daftaruser', compact('users'));
    }
    public function editStatus($id)
{
    // Find the user by ID
    $user = User::findOrFail($id);

    // Return the view with the user data
    return view('admin.editstatus', compact('user'));
}

public function updateStatus(Request $request, $id)
{
    // Validate the input to ensure it's either 0 or 1 (User or Admin)
    $request->validate([
        'status' => 'required|in:0,1', // Assuming 0 = user, 1 = admin
    ]);

    // Find the user and update the status
    $user = User::findOrFail($id);
    $user->status = $request->input('status'); // Update the status (0 = user, 1 = admin)
    $user->save();

    // Redirect back with a success message
    return redirect()->route('admin.editstatus', $user->id)->with('success', 'User status updated successfully!');
}



}
