@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>No</th>
                            <th>User</th>
                            <th>Created At</th>
                            <th>Status Pengajuan</th>
                            <th>Catatan</th>
                            @if(\Auth::user()->status == 2)
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td>
                                <div style="width:60px">
                                @if(\Auth::user()->status == 2)
                                 <a href="{{url('setujui-pengajuan/edit/'.$dt->id)}}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
                                 @endif
                                 <a href="{{url('setujui-pengajuan/detail/'.$dt->id)}}" class="btn btn-primary btn-xs btn-edit" id="edit"><i class="fa fa-eye"></i></a>
                            </td>
                            <td>{{$e+1}}</td>
                            <td>{{$dt->user_r->name}}</td>
                            <td>{{$dt->created_at}}</td>
                            @if($dt->status == null)
                            <td><label class="label label-warning">Menunggu Verifikasi</label></td>
                            @elseif($dt->status == 1)
                            <td><label class="label label-success">Disetujui</label></td>
                            @elseif($dt->status == 2)
                            <td><label class="label label-danger">Ditolak</label></td>
                            @endif
                            <td>{{$dt->catatan}}</td>
                            @if($dt->status == null)
                            @if(\Auth::user()->status == 2)
                            <td>
                                <a href="{{url('setujui-pengajuan/setujui/'.$dt->id)}}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-check"></i>Setujui ?</a>
                                <a href="{{url('setujui-pengajuan/tolak/'.$dt->id)}}" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-pencil-square-o"></i>Tolak ?</a>
                            </td>
                            @elseif($dt->status == 1)
                            <td>
                                 <a href="{{url('setujui-pengajuan/tolak/'.$dt->id)}}" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-pencil-square-o"></i>Tolak ?</a>
                            </td>
                            @elseif($dt->status == 2)
                            <td>
                                <a href="{{url('setujui-pengajuan/setujui/'.$dt->id)}}" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-check"></i>Setujui ?</a>
                            </td>
                            @endif
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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