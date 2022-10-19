@extends('layouts.master')

@section('content')


<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $tot_layanan }}</h3>

              <p>Total Layanan Tersedia</p>
            </div>
            <div class="icon">
              <i class="ion ion-wrench"></i>
            </div>
           <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $tot_pengajuan }}</h3>

              <p>Total pengajuan Layanan Tersedia</p>
            </div>
            <div class="icon">
              <i class="ion ion-plus-round"></i>
            </div>
           <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $tot_setujui }}</h3>

              <p>Total Approvement Pengajuan</p>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark-round"></i>
            </div>
           <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $tot_user }}</h3>

              <p>Total Pengguna Aplikasi Terdaftar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
           <!--  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->

</div>


@endsection

