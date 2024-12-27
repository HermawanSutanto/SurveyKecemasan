<?php

namespace App\Exports;

use App\Models\hasil_tessrq;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RiwayatTesExport implements FromView
{
    protected $riwayatTes;
    protected $test;

    public function __construct($riwayatTes, $test)
    {
        $this->riwayatTes = $riwayatTes;
        $this->test = $test;
    }

    public function view(): View
    {
        return view('tes.pdf', [
            'riwayatTes' => $this->riwayatTes,
            'test' => $this->test,
        ]);
    }
}
