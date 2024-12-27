<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\RiwayatTesExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function exportExcel($test)
{
    $models = [
        'SRQ' => \App\Models\hasil_tessrq::class,
        'BFI' => \App\Models\hasil_tesbfi::class,
        'SAS' => \App\Models\hasil_tessas::class,
        'SDQ' => \App\Models\hasil_tessdq::class,
    ];

    if (!array_key_exists($test, $models)) {
        return abort(404, 'Jenis tes tidak ditemukan');
    }

    $modelClass = $models[$test];
    $riwayatTes = $modelClass::all();

    return Excel::download(new RiwayatTesExport($riwayatTes, $test), "riwayat_tes_{$test}.xlsx");
}
}
