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
        $test= $request['test'];
        if ($test == "SRQ" || $test == "SAS") {
            $validated = $request->validate([
                'hasil_tes' => 'required|integer',
                'interpretasi' => 'required|string',
                'test' => 'required|string', 
            ]);
            session([
                'hasil_tes' => $validated['hasil_tes'],
                'interpretasi' => $validated['interpretasi'],
                'test' => $validated['test'],
            ]);
        }
        if ($test == "SDQ") {
            $validated = $request->validate([
                'total_difficulty_score' => 'required|integer',
                'total_strength_score' => 'required|integer',
                'interpretasi_difficulty' => 'required|string',
                'interpretasi_strength' => 'required|string',
                'test' => 'required|string',
            ]);
            session([
                'total_difficulty_score' => $validated['total_difficulty_score'],
                'total_strength_score' => $validated['total_strength_score'],
                'interpretasi_difficulty' => $validated['interpretasi_difficulty'],
                'interpretasi_strength' => $validated['interpretasi_strength'],
                'test' => $validated['test'],
            ]);
        }

        return redirect()->route('tes.resultumum');
    }
    public function showresult()
    {
        // Ambil data dari session
        $test = session('test');
        if( $test =='SRQ'||$test =='SAS'){
            $hasilTes = session('hasil_tes');
            $interpretasi = session('interpretasi');
            if (!$hasilTes || !$interpretasi || !$test) {
                return redirect()->route('tes')->with('error', 'Data hasil tes tidak ditemukan.');
            }
            return view('tes.tesresult', [
                'nama_lengkap'=>'',
                'test' => $test,
                'hasil_tes' => $hasilTes,
                'interpretasi' => $interpretasi,
                'penjelasan_hasil' => 'Penjelasan hasil ini dapat diubah sesuai kebutuhan.', // Penjelasan hasil dapat disesuaikan
            ]);
        }
        if( $test =='SDQ'){
            $difficultyscore = session('total_difficulty_score');
            $strengthscore = session('total_strength_score');
            $interpretasidifficulty = session('interpretasi_difficulty');
            $interpretasistrength = session('interpretasi_strength');

            if (!$difficultyscore || !$strengthscore || !$interpretasidifficulty|| !$interpretasistrength|| !$test) {
                return redirect()->route('tes')->with('error', 'Data hasil tes tidak ditemukan.');
            }
            return view('tes.tesresult', [
                'nama_lengkap'=>'',
                'test' => $test,
                'skor_kesulitan' => $difficultyscore,
                'skor_kekuatan' => $strengthscore,
                'interpretasi_kesulitan' => $interpretasidifficulty,
                'interpretasi_kekuatan' => $interpretasistrength,
                'penjelasan_hasil' => 'Penjelasan hasil ini dapat diubah sesuai kebutuhan.', // Penjelasan hasil dapat disesuaikan
            ]);
        }
        
    }

}
