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
               
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{$dt->nama}}</td>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{$dt->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Usia</th>
                                <td>:</td>
                                <td>{{$dt->usia}}</td>
                                <th>Tempat Tanggal Lahir</th>
                                <td>:</td>
                                <td>{{$dt->ttl}}</td>
                            </tr>
                            <tr>
                                <th>Catatan</th>
                                <td>:</td>
                                <td>{{$dt->catatan}}</td>
                                <th>Created At</th>
                                <td>:</td>
                                <td>{{$dt->created_at}}</td>
                            </tr>
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