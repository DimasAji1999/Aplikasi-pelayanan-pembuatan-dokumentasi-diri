@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{url('/setujui-pengajuan')}}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-backward"></i> Back</a>

                    <a target="_blank" href="{{url('/setujui-pengajuan/pdf/'.$dt->id)}}" class="btn btn-sm btn-flat btn-success"><i class="fa fa-downlad"></i> Export PDF</a>
                </p>
            </div>
            <div class="box-body">

                <div class="table-responsive">
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <th>User</th>
                                <td>:</td>
                                <td>{{$dt->user_r->name}}</td>
                                <th>Created At</th>
                                <td>:</td>
                                <td>{{$dt->created_at}}</td>
                                <tr>
                                <th>Catatan</th>
                                <td>:</td>
                                <td>{{$dt->catatan}}</td>    
                                <th>Updated At</th>
                                <td>:</td>
                                <td>{{$dt->updated_at}}</td>   
                                </tr>  
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