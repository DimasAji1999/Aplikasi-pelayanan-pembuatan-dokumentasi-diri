@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{url('pengajuan/add')}}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Data Layanan </a>

                    <a href="{{url('pengajuan/add/kosong')}}" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-plus"></i> Data Belum Disetujui </a>


                </p>
            </div>
            <div class="box-body">
               
                <div class="table-responsive">
                    <table class="table table-hover myTable">
                        <thead>
                            <tr>
                                <th>Action</th>
                                @if(\Auth::user()->status == 1)
                                <th>Status Pengajuan</th>
                                <th>Status Akses</th>
                                @endif
                                <th>No</th>
                                <th>Kategori Layanan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Usia</th>
                                <th>Tempat Tanggal Lahir</th>
                                <th>Catatan</th>
                                <th>File</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>
                                    <div style="width:60px">
                                    @if(\Auth::user()->status == 1)
                                    <a href="{{url('pengajuan/'.$dt->id)}}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>

                                    <button href="{{url('pengajuan/'.$dt->id)}}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button></div>
                                    @endif

                                    <a href="{{url('pengajuan/detail/'.$dt->id)}}" class="btn btn-primary btn-xs btn-edit" id="edit"><i class="fa fa-eye"></i></a>
                                </td>
                                @if(\Auth::user()->status == 1)
                                <td>
                                    <a href="{{url('setujui-pengajuan/'.$dt->id)}}" class="btn btn-flat btn-sm btn-primary"> Setujui Layanan ?</a>
                                </td>
                                <td>
                                    @if($dt->status ==1)
                                    <a href="{{url('pengajuan/status/'.$dt->id)}}" class="btn btn-sm btn-danger">Offprogres</a>
                                    @else
                                    <a href="{{url('pengajuan/status/'.$dt->id)}}" class="btn btn-sm btn-success">Onprogres</a>
                                    @endif
                                </td>
                                @endif
                                <td>{{$e+1}}</td>
                                <td>{{$dt->kategori_r->nama}}</td>
                                <td>{{$dt->nama}}</td>
                                <td>{{$dt->alamat}}</td>
                                <td>{{$dt->usia}}</td>
                                <td>{{$dt->ttl}}</td>
                                <td>{{$dt->catatan}}</td>
                                <td>{{$dt->file}}</td>
                                <td><label class="label {{($dt->status ==1)? 'label-success' : 'label-danger'}}">{{($dt->status ==1) ? 'Onprogres' : 'Offprogres'}}</label></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection