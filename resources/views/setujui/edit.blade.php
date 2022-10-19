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
                </p>
            </div>
            <div class="box-body">
                    <form role="form" method="post" action="{{url('setujui-pengajuan/edit/'.$dt->id)}}">
                        @csrf
                        {{ method_field('PUT') }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Catatan</label>
                      <input type="text-area" name="catatan" class="form-control" id="exampleInputPassword1" placeholder="Catatan" value="{{$dt->catatan}}">
                    </div>
                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
               
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