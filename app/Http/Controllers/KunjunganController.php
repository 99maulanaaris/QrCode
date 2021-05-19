<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Generator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;

class KunjunganController extends Controller
{
    public function index()
    {
        return view('Home.kunjungan');
    }

    public function store()
    {
        $attr = request()->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'noIdentitas' => 'required|numeric',
            'noHp' => 'required|numeric'
        ]);

        $attr = Kunjungan::create([
            'nama' => request('nama'),
            'email' => request('email'),
            'noIdentitas' => request('noIdentitas'),
            'noHp' => request('noHp')
        ]);

        if ($attr) {

            $qrCode = new Generator;

            $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate($attr->id));

            $pdf = PDF::loadview('Cetak.qrcode', compact('qrcode', 'attr'))->setPaper('A4', 'portrait');
            return $pdf->stream();
        }
    }
}
