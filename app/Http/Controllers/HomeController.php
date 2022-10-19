<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_layanan;
use App\Models\M_pengajuan;
use App\Models\M_setujui;
use App\Models\User;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Beranda Tampilan';
        $tot_layanan = M_layanan::count();
        $tot_pengajuan = M_pengajuan::count();
        $tot_setujui = M_setujui::count();
        $tot_user = User::count();
        return view('home',compact('title','tot_layanan','tot_pengajuan','tot_setujui','tot_user'));
    }
}
