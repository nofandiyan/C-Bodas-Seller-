@extends('layouts.app')

@section('content')

<script type="text/javascript">

   // function changeFunc() {
   //  // var userAs = document.getElementById("userAs");
   //  // var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   //  var x = document.getElementById("massAvailable").value;
   //  document.getElementById("showValue").innerHTML = x;
   // }

// $(document).ready(function(){
//     $(".gender").change(function(){
//         $(this).find("option:selected").each(function(){
//             if($(this).attr("value")=="M"){
//                 $(".box").not(".M").hide();
//                 $(".male").show();
//             }
//             else if($(this).attr("value")=="F"){
//                 $(".box").not(".F").hide();
//                 $(".female").show();
//             }
//             else{
//                 $(".box").hide();
//             }
//         });
//     }).change();
// });

</script> 
@if (!empty(Auth::user()))
    @if(Auth::user()->userAs == 1)
                

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lapak Baru</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/produkTani/{{$tani->id}}">
                        {!! csrf_field() !!}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name='idMerchant' value="{{Auth::user()->id}}">

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Judul</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ $tani->title }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Deskripsi</label>

                            <div class="col-md-6">
                                <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                <textarea class="form-control" name="desc">{{ $tani->desc }}</textarea> 

                                @if ($errors->has('desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- Tani -->
                        <div class="col-md-9 col-md-offset-1">
                            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Stok Tersedia</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="stock" step="1" value="{{ $tani->stock }}">

                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <select class="form-control" name="massStock" id="massStock">
                                        <option <?php if($tani->massStock=="Gram") echo 'selected'; ?> value="Gram">Gram</option>
                                        <option <?php if($tani->massStock=="Ons") echo 'selected'; ?> value="Ons">Ons</option>
                                        <option <?php if($tani->massStock=="Kilogram") echo 'selected'; ?> value="Kilogram">Kilogram</option>
                                        <option <?php if($tani->massStock=="Kwintal") echo 'selected'; ?> value="Kwintal">Kwintal</option>
                                        <option <?php if($tani->massStock=="Ton") echo 'selected'; ?> value="Ton">Ton</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="price" step="50" value="{{ $tani->price }}">

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label class="col-md-1 control-label">Per</label>
                                <div class="col-md-3">
                                    <select class="form-control" name="massSell" id="massSell" value="{{ $tani->massSell }}">
                                        <option <?php if($tani->massSell=="Gram") echo 'selected'; ?> value="Gram">Gram</option>
                                        <option <?php if($tani->massSell=="Ons") echo 'selected'; ?> value="Ons">Ons</option>
                                        <option <?php if($tani->massSell=="Kilogram") echo 'selected'; ?> value="Kilogram">Kilogram</option>
                                        <option <?php if($tani->massSell=="Kwintal") echo 'selected'; ?> value="Kwintal">Kwintal</option>
                                        <option <?php if($tani->massSell=="Ton") echo 'selected'; ?> value="Ton">Ton</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit" value="POST">
                                    <i class="fa fa-btn fa-user"></i>Simpan
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@else
    return view('/');
@endif
@endif

@endsection
