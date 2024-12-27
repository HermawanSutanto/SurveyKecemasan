<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function exportPDF($test)
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

    $pdf = Pdf::loadView('tes.pdf', compact('riwayatTes', 'test'));
    return $pdf->download("riwayat_tes_{$test}.pdf");
}
}
