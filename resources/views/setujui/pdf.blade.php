<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style type="text/css">
        .left {text-align: left;}
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
 
   
   
</head>
<body>


            <div class="row">
                 <div class="col-xs-12">
                        <h3>
                            <center>
                               <b><i>{{$ph->nama}}</i></b>
                            </center>
                        </h3>
                </div>
            </div>

            <br>
            <br>

            <div class="row" style="text-align: left;">
                 <div class="col-xs-12">
                        <b><i>Kepala Dinas Kependudukan dan Pencatatan Sipil Kota Bandung menyatakan bahwa,</i></b>
                </div>
            </div>
            <br>
            <br>
                        
            <div class="box-body" style="text-align: left;">

                <div class="row">
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$dh->nama}}</td>
                                </tr>  

                                <tr>
                                    <td>Tempat Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{$dh->ttl}}</td>
                                </tr> 

                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{$dh->alamat}}</td>
                                </tr> 

                                <tr>
                                    <td>Usia</td>
                                    <td>:</td>
                                    <td>{{$dh->usia}}</td>
                                </tr> 
                            </tr>  
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                 <div class="col-xs-12">
                        <p>
                               <b><i>{{$ph->keterangan}}</i></b>
                        </p>
                </div>
            </div>
    
    <br>
    <br>
    <div class="row">
        <div class="col-xs-4">
            <center>
                <p>Menyutui</p>
                <p>Kepala Desa</p>
                <br>
                <br>
                <br>
                <br>
                ----------------
            </center>
        </div>
    </div>

   
</body>
</html>