<?php

namespace App\Http\Controllers;

use App\Models\Checkin;
use App\Models\Kunjungan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        $title = "Home";
        return view('Home.backend', compact('title'));
    }

    public function checkin()
    {
        $title = "Checkin QrCode";


        return view('Checkin.index', compact('title'));
    }

    public function getCheckin(Request $request)
    {
        $today = Carbon::now();
        $data = Kunjungan::where('noIdentitas', 'like', "%" . $request->cari . "%")->get();

        foreach ($data as $d) {
            $file = [
                'kunjungan_id' => $d->id,
                'waktuCheckin' => $today
            ];

            dd($file);
        }
    }

    public function checkout()
    {
        $title = "Checkout";
        return view('Checkout.index', compact('title'));
    }
}
