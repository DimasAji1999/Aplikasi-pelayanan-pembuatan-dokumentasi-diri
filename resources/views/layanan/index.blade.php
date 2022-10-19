@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    @if(\Auth::user()->status == 1)
                    <a href="{{url('layanan/add')}}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Tambah Akses Layanan</a>
                    @endif

                </p>
            </div>
            <div class="box-body">
               

            	<div class="table-responsive">
            		<table class="table myTable">
            			<thead>
            				<tr>
                                @if(\Auth::user()->status == 1)
            					<th>Action</th>
                                @endif
            					<th>No</th>
            					<th>Nama Layanan</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach($data as $e=>$dt)
            				<tr>
                            @if(\Auth::user()->status == 1)
            				<td>
            					<div style="width:60px"><a href="{{url('layanan/'.$dt->id)}}"class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>

            					<button href="{{url('layanan/'.$dt->id)}}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button></div>
            				</td>
                            @endif
            					<td>{{$e+1}}</td>
            					<td>{{$dt->nama}}</td>
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