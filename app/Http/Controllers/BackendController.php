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


    public function getVisitor()
    {
        $visitors = Kunjungan::all();
        $title = "Data Pengunjung";
        return view('Home.visitor', compact('visitors', 'title'));
    }

    public function checkin()
    {
        $title = "Checkin";
        $checkins = Checkin::all();
        $tanggal = Carbon::now();
        return view('Home.checkin', compact('title', 'checkins', 'tanggal'));
    }

    public function checkout()
    {
        $title = "Checkout";
        return view('Checkout.index', compact('title'));
    }
}
