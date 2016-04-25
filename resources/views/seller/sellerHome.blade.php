@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Halaman Penjual</div>
                <div class="panel-body">
                    <div>
                        <form class="form-horizontal" role="form" method="POST" action="sellerProfile">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <div class="col-md-4" align="center">
                                <button type="submit" class="btn btn-primary" name="submit" value="">
                                    <i class="fa fa-btn fa-user"></i>Lihat Profil
                                </button>    
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                <!-- <label class="col-md-4" align="right">Hai, </label> -->
                                    {{Auth::user()->name}}
                                </div>

                                <div class="form-group">
                                    <!-- <label class="col-md-4" align="right">Telepon</label> -->
                                    {{Auth::user()->telp}}
                                </div>

                                <div class="form-group">
                                    <!-- <label class="col-md-4" align="right">Alamat</label> -->
                                    {{Auth::user()->street}}
                                </div>
                                
                                <div class="form-group">
                                    {{Auth::user()->city}}
                                </div>

                                <div class="form-group">
                                    {{Auth::user()->prov}}
                                </div>

                                <div class="form-group">
                                    {{Auth::user()->zipCode}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lapak</div>
                <div class="panel-body">
                    <div class="col-md-3">
                        <!-- <h2> Hai, {{Auth::user()->name}}</h2> -->
                        <div>
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lapak">Buat Lapak Yuk!</button>
                            <div id="lapak" class="collapse">
                                <div>
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Lapak Pertanian</a>
                                                </h4>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse">
                                                <div class="panel-body">Lapak Pertanian merupakan lapak hasil bumi dari kawasan Cibodas
                                                </div>
                                                <div class="panel-body">
                                                    <a href="{{ url('produkTani/create') }}" class="btn btn-warning btn-sm">Buat Lapak</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Lapak Hewan Ternak</a>
                                                </h4>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                                <div class="panel-body">Lapak Hewan Ternak merupakan lapak hewan ternak dari kawasan Cibodas
                                                </div>
                                                <div class="panel-body">
                                                    <a href="{{ url('produkTernak/create') }}" class="btn btn-warning btn-sm">Buat Lapak</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Lapak Pariwisata</a>
                                                </h4>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Lapak Pariwisata merupakan lapak penjualan tiket pariwisata yang ada di kawasan Cibodas
                                                </div>
                                                <div class="panel-body">
                                                    <a href="{{ url('produkWisata/create') }}" class="btn btn-warning btn-sm">Buat Lapak</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Lapak Persewaan Villa</a>
                                                </h4>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Lapak Villa merupakan lapak persewaan Villa yang ada di kawasan Cibodas
                                                </div>
                                                <div class="panel-body">
                                                    <a href="{{ url('produkVilla/create') }}" class="btn btn-warning btn-sm">Buat Lapak</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Lapak Edukasi Tani</a>
                                                </h4>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Lapak Edukasi Tani merupakan lapak penjualan jasa edukasi Pertanian yang ada di kawasan Cibodas
                                                </div>
                                                <div class="panel-body">
                                                    <a href="{{ url('produkEdukasi/create') }}" class="btn btn-warning btn-sm">Buat Lapak</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label>
                            Daftar Lapak
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
