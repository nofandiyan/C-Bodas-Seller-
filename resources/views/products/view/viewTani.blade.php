@extends('layouts.app')

@section('content')
	
	<p>{{$tani->title}}</p>
	<p>{{$tani->desc}}</p>
	<p>{{$tani->stock}}</p>
	<p>{{$tani->massStock}}</p>
	<p>{{$tani->price}}</p>
	<p>{{$tani->massSell}}</p>
	<a href="/produkTani/{{$tani->id}}/edit" class="btn btn-info" role="button">Edit</a>
	<hr>

@endsection