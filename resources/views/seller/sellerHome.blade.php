@extends('layouts.app')

@section('content')

<style>
    td.short{
          white-space: nowrap;
          overflow: hidden;
          text-overflow: ellipsis;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Halaman Penjual</div>
                <div class="panel-body">
                    <div>
                        <form class="form-horizontal" role="form" method="POST">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="col-md-4" align="center">
                                <img src="{{ url(Auth::user()->profPict) }}" class="img-thumbnail" height="304" width="236">
                                <a href="/sellerProfile/{{Auth::user()->id}}" class="btn btn-info" role="button">Lihat Profile</a>
                                <!-- <button type="submit" class="btn btn-primary" name="submit" value="">
                                    <i class="fa fa-btn fa-user"></i>Lihat Profil
                                </button>     -->
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    {{Auth::user()->name}}
                                </div>

                                <div class="form-group">
                                    {{Auth::user()->telp}}
                                </div>

                                <div class="form-group">
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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lapak</div>
                <div class="panel-body">
                    <div class="col-md-3">
                        <div>
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lapak">Buat Lapak Yuk!</button>

                            <!-- <div id="lapak" class="collapse"> -->
                            <div>
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
                    <div class="col-md-9">
                        <h3 align="center"><label>Lapak Terdaftar</label></h3>
                        <!-- <div>
                            <a href="/produkTani/" class="btn btn-info" role="button">Daftar Lapak Pertanian</a>
                        </div>
                        <div>
                            <a href="/produkTernak/" class="btn btn-info" role="button">Daftar Lapak Hewan Ternak</a>
                        </div>
                        <div>
                            <a href="/produkWisata/" class="btn btn-info" role="button">Daftar Lapak Pariwisata</a>
                        </div>
                        <div>
                            <a href="/produkVilla/" class="btn btn-info" role="button">Daftar Lapak Persewaan Villa</a>
                        </div>
                        <div>
                            <a href="/produkEdukasi/" class="btn btn-info" role="button">Daftar Lapak Edukasi Tani</a>
                        </div> -->
                        <div align="center">
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lapakTani">Lapak Pertanian</button>
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lapakTernak">Lapak Hewan Ternak</button>
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lapakWisata">Lapak Pariwisata</button>
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lapakVilla">Lapak Persewaan Villa</button>
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lapakEdukasi">Lapak Edukasi Tani</button>
                        </div>
                        <div align="center">
                            <br>
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#lapakTani, #lapakTernak, #lapakWisata, #lapakVilla, #lapakEdukasi">Semua Lapak</button>
                        </div>
                        <div>
                            <hr>
                              <div id="lapakTani" class="collapse">
                                <div class="row" align="center">
                                <h4><label>Lapak Pertanian</label></h4>
                                  <table class="table table-hover" style="table-layout: fixed;">
                                    <thead>
                                      <tr>
                                        <th class="col-md-3">Judul Lapak</th>
                                        <th class="col-md-10">Deskripsi Lapak</th>
                                        <th class="col-md-2">Opsi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tanis as $tani)
                                      <tr>
                                        <td class="short">{{$tani->title}}</td>
                                        <td class="short">{{$tani->desc}}</td>
                                        <td><a href="/produkTani/{{$tani->id}}" class="btn btn-info" role="button">Detail</a></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              
                              <hr>

                              <div id="lapakTernak" class="collapse">
                                <div class="row" align="center">
                                <h4><label>Lapak Hewan Ternak</label></h4>
                                  <table class="table table-hover" style="table-layout: fixed;">
                                    <thead>
                                      <tr>
                                        <th class="col-md-3">Judul Lapak</th>
                                        <th class="col-md-10">Deskripsi Lapak</th>
                                        <th class="col-md-2">Opsi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ternaks as $ternak)
                                      <tr>
                                        <td class="short">{{$ternak->title}}</td>
                                        <td class="short">{{$ternak->desc}}</td>
                                        <td><a href="/produkTernak/{{$ternak->id}}" class="btn btn-info" role="button">Detail</a></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>

                            <hr>

                            <div id="lapakWisata" class="collapse">
                                <div class="row" align="center">
                                <h4><label>Lapak Pariwisata</label></h4>
                                  <table class="table table-hover" style="table-layout: fixed;">
                                    <thead>
                                      <tr>
                                        <th class="col-md-3">Judul Lapak</th>
                                        <th class="col-md-10">Deskripsi Lapak</th>
                                        <th class="col-md-2">Opsi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($wisatas as $wisata)
                                      <tr>
                                        <td class="short">{{$wisata->title}}</td>
                                        <td class="short">{{$wisata->desc}}</td>
                                        <td><a href="/produkWisata/{{$wisata->id}}" class="btn btn-info" role="button">Detail</a></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                                </div>
                            </div>

                              <hr>

                            <div id="lapakVilla" class="collapse">
                                <div class="row" align="center">
                                <h4><label>Lapak Persewaan Villa</label></h4>
                                  <table class="table table-hover" style="table-layout: fixed;">
                                    <thead>
                                      <tr>
                                        <th class="col-md-3">Judul Lapak</th>
                                        <th class="col-md-10">Deskripsi Lapak</th>
                                        <th class="col-md-2">Opsi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($villas as $villa)
                                      <tr>
                                        <td class="short">{{$villa->title}}</td>
                                        <td class="short">{{$villa->desc}}</td>
                                        <td><a href="/produkVilla/{{$villa->id}}" class="btn btn-info" role="button">Detail</a></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                                </div>
                            </div>

                            <hr>

                            <div id="lapakEdukasi" class="collapse">
                                <div class="row" align="center">
                                <h4><label>Lapak Edukasi Tani</label></h4>
                                  <table class="table table-hover" style="table-layout: fixed;">
                                    <thead>
                                      <tr>
                                        <th class="col-md-3">Judul Lapak</th>
                                        <th class="col-md-10">Deskripsi Lapak</th>
                                        <th class="col-md-2">Opsi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($edukasis as $edukasi)
                                      <tr>
                                        <td class="short">{{$edukasi->title}}</td>
                                        <td class="short">{{$edukasi->desc}}</td>
                                        <td><a href="/produkEdukasi/{{$edukasi->id}}" class="btn btn-info" role="button">Detail</a></td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>

                            <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
