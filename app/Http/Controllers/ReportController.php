<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function exportPDF()
    {
        $bank = Pelanggan::all();

        $pdf = PDF::loadView('export', ['pelanggan' => $bank])->setPaper('a3', 'landscape');
        return $pdf->stream();
}
}
