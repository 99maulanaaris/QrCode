<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Kunjungan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckinController extends Controller
{
    public function index()
    {


        $title = "Checkin QrCode";


        return view('Checkin.index', compact('title'));
    }

    public function search(Request $request)
    {
        $today = Carbon::now();
        $data = Kunjungan::where('noIdentitas', 'like', "%" . $request->cari . "%")->get();



        foreach ($data as $d) {
            # Cek Apakah ID Telah Checkin
            if (Checkin::find($d->id)) {
                return back()->with('error', 'Anda Telah Checkin !!!!');
            } else {
                $kunjungan = Kunjungan::find($d->id);
                $checkin = Checkin::create([
                    'kunjungan_id' => $d->id,
                    'waktuCheckin' => $today->toTimeString()
                ]);
                if ($checkin) {
                    $kunjungan->checkin = 1;
                    $kunjungan->save();
                    return redirect(route('checkin.success'))->with('success', 'Terima Kasih Anda Telah Berhasil Checkin !!!');
                }
            }
        }
    }

    public function success()
    {

        return view('Cetak.checkin');
    }
}
