<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_setujui;
use App\Models\User;
use App\Models\M_layanan;
use App\Models\M_pengajuan;



use PDF;

class Setujui_controller extends Controller
{
    public function store($id){
        \DB::table('setujui')->insert([
            'layanan'=>$id,
            'user'=>\Auth::user()->id,
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        \Session::flash('sukses','Data Berhasil Disetujui');
        return redirect('/pengajuan');
    }
    public function pdf($id){
         try {
            $dt = M_setujui::with('user_r')->find($id);
            $ph = M_layanan::first();
            $dh = M_pengajuan::first();
 
            $pdf = PDF::loadview('setujui.pdf',compact('dt','ph','dh'))->setPaper('a4', 'landscape');
            return $pdf->stream();
 
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage().' ! '.$e->getLine());
        }
 
        return redirect()->back();
    }
    public function index(){
        $title = 'Halaman Akses Pengajuan';
        $data = M_setujui::get();

        return view('setujui.index',compact('title','data'));

    }
    public function setujui($id){
        M_setujui::where('id',$id)->update(['status'=>1]);

        \Session::flash('sukses','Data Berhasil Disetujui');
        return redirect('setujui-pengajuan');
    }
    public function tolak($id){
        M_setujui::where('id',$id)->update(['status'=>2]);

        \Session::flash('sukses','Data Berhasil Ditolak');
        return redirect('setujui-pengajuan');
    }
    public function detail($id){
        $title = 'Detail Data Status';
        $dt = M_setujui::find($id);

        return view('setujui.detail',compact('title','dt'));
    }
    public function edit($id){
        $title = 'Update Data Status';
        $dt = M_setujui::find($id);

        return view('setujui.edit',compact('title','dt'));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'catatan'=>'required'
        ]);
        $data=$request->except(['_token','_method']);
        // $data['created_at']= date('Y-m-d H:i:s');
        $data['updated_at']= date('Y-m-d H:i:s');
        M_setujui::where('id',$id)->update($data);

        \Session::flash('sukses','Data Berhasil Diupdate');
        return redirect('setujui-pengajuan');
    }
}
