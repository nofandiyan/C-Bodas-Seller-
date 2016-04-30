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
                    <form class="form-horizontal" role="form" method="POST" action="/produkTernak/{{$ternak->id}}">
                        {!! csrf_field() !!}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name='idMerchant' value="{{Auth::user()->id}}">

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Judul</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ $ternak->title }}">

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
                                <textarea class="form-control" name="desc">{{ $ternak->desc }}</textarea> 

                                @if ($errors->has('desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- Ternak -->
                        <div class="col-md-9 col-md-offset-1">
                            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Usia</label>

                                <div class="col-md-2">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="year" step="1" placeholder="Tahun" min="0" value="{{$ternak->year}}">

                                    @if ($errors->has('year'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="col-md-2">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="month" step="1" placeholder="Bulan" min="0" value="{{$ternak->month}}">

                                    @if ($errors->has('month'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('month') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-2">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="day" step="1" placeholder="Hari" min="0" value="{{$ternak->day}}">

                                    @if ($errors->has('day'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('day') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <!-- <select class="form-control" name="userAs" id="userAs" onchange="changeFunc();"> -->
                                    <select class="form-control gender" name="gender" id="gender">
                                    <!-- <select class="form-control" name="userAs" id="userAs"> -->

                                        <option value="L" <?php if($ternak->gender=="L") echo 'selected'; ?>>Laki-laki</option>
                                        <option value="P" <?php if($ternak->gender=="M") echo 'selected'; ?>>Perempuan</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Berat</label>

                                <div class="col-md-4">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="weight" step="1" min="0" value="{{$ternak->weight}}">

                                    @if ($errors->has('weight'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('weight') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                
                                <label class="control-label">Kilogram</label>
                                

                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Harga</label>

                                <div class="col-md-8">
                                    <!-- <textarea class="form-control" name="desc" value="{{ old('desc') }}"> -->
                                    <input type="number" class="form-control" name="price" step="50" min="0" value="{{$ternak->price}}">

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
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
