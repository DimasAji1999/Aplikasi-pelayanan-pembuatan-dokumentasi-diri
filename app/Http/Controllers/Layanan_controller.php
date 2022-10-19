<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_layanan;

class Layanan_controller extends Controller
{
    public function index(){
        $title = 'Master Data layanan';
        $data = M_layanan::orderBy('nama','asc')->get();

        return view('layanan.index',compact('title','data'));
    }

    public function add(){
        $title = 'Tambah Layanan';

        return view('layanan.add',compact('title'));
    }

    public function store(Request $request){
        $this->validate($request,[
        'nama'=>'required'   
        ]);

        $a['nama'] = $request->nama;
        $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');

        M_layanan::insert($a);

        \Session::flash('sukses','Data Berhasil Ditambahkan');

        return redirect('layanan');
    }
    public function edit($id){
        $title = 'Edit Data';
        $dt = M_layanan::find($id);

        return view('layanan.edit',compact('title','dt'));
    }
     public function update(Request $request, $id){
        $this->validate($request,[
        'nama'=>'required'   
        ]);

        $a['nama'] = $request->nama;
        // $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');

        M_layanan::where('id',$id)->update($a);

        \Session::flash('sukses','Data Berhasil Diupdate');

        return redirect('layanan');
    }
    public function delete($id){
         try{
            M_layanan::where('id',$id)->delete();

            \Session::flash('sukses','Data berhasil dihapus');
        } catch (Exception $e){
            \Session::flash('gagal',$e->getMessage());
        }
        return redirect('layanan');
    }
}
