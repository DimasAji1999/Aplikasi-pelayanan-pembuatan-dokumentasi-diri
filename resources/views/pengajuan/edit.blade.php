@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{url('/pengajuan')}}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-backward"></i> Back</a>
                </p>
            </div>
            <div class="box-body">

                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
               @endif

                <form role="form" accept="{{url('pengajuan/'.$dt->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Pilih Layanan</label>
                      <select class="form-control select2" name="kategori" >
                          @foreach ($layanan as $sp)
                          <option value="{{$sp->id}}" {{ ($dt->kategori == $sp->id)?'selected' : "" }}>{{$sp->nama}}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{$dt->nama}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="{{$dt->alamat}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Usia</label>
                      <input type="text" name="usia" class="form-control" id="exampleInputPassword1" placeholder="Usia" value="{{$dt->usia}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Tempat Tanggal Lahir</label>
                      <input type="text" name="ttl" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir"value="{{$dt->ttl}}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Catatan</label>
                      <input type="text" name="catatan" class="form-control" id="exampleInputPassword1" placeholder="Catatan"value="{{$dt->catatan}}">
                    </div>
                    
                     <div class="form-group">
                      <label for="exampleInputPassword1">Upload File</label>
                      <input type="file" name="file" class="form-control" id="exampleInputPassword1" autocomplete="off">
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