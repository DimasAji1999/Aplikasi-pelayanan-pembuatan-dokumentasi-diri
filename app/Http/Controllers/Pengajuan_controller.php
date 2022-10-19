<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_pengajuan;
use App\Models\M_layanan;

class Pengajuan_controller extends Controller
{
    public function add(){
        $title = 'Tambah Pengajuan Layanan';
        $layanan = M_layanan::get();

        return view('pengajuan.add',compact('title','layanan'));
    }
    public function store(Request $request){

        $this->validate($request,[
            'kategori'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'usia'=>'required',
            'ttl'=>'required',
            'file'=>'file'
        ]);
        if($request->file('file')){
            $validateData['file'] = $request->file('file')->store('post-files');
        }

        $data=$request->except(['_token']);
        $data['created_at']= date('Y-m-d H:i:s');
        $data['updated_at']= date('Y-m-d H:i:s');
        M_pengajuan::insert($data);

        \Session::flash('sukses','Data Berhasil Ditambahkan');
        return redirect('pengajuan/add');
    }
    public function index(){
        $title = 'List Pengajuan Pelayanan';
        $data = M_pengajuan::orderBy('nama','asc')->get();

        return view('pengajuan.index',compact('title','data'));
    }
    public function edit($id){
        $title = 'Edit Data Pengajuan Layanan';
        $layanan = M_layanan::get();
        $dt = M_pengajuan::find($id);

        return view('pengajuan.edit',compact('title','layanan','dt'));
    }
     public function update(Request $request,$id){
        $this->validate($request,[
            'kategori'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'usia'=>'required',
            'ttl'=>'required',
            'file'=>'file'

        ]);
        if($request->file('file')){
            $validateData['file'] = $request->file('file')->store('post-files');
        }

        $data=$request->except(['_token','_method']);
        // $data['created_at']= date('Y-m-d H:i:s');
        $data['updated_at']= date('Y-m-d H:i:s');
        M_pengajuan::where('id',$id)->update($data);

        \Session::flash('sukses','Data Berhasil Diupdate');
        return redirect('pengajuan');
    }
    public function delete($id){
        try{
            M_pengajuan::where('id',$id)->delete();

            \Session::flash('sukses','Data berhasil dihapus');
        }catch (\Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect()->back();
    }
    public function status($id){
        $data = \DB::table('m_pengajuan')->where('id',$id)->first();
        $status_sekarang = $data ->status;
        if($status_sekarang == 1){
            \DB::table('m_pengajuan')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('m_pengajuan')->where('id',$id)->update([
                'status'=>1
            ]);
        }
            \Session::flash('sukses','Data berhasil diupdate');
            return redirect('/pengajuan');
    }
    public function kosong(){
        $title = 'Pelayanan Belum disetujui';
        $data = M_pengajuan::orderBy('nama','asc')->where('status','<','1')->get();

        return view('pengajuan.index',compact('title','data'));
    }
     public function detail($id){
        $title = 'Detail Data Status';
        $dt = M_pengajuan::find($id);

        return view('pengajuan.detail',compact('title','dt'));
    }
}
