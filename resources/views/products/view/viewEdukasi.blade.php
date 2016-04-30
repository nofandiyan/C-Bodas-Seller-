@extends('layouts.app')

@section('content')
	
	<p>{{$edukasi->title}}</p>
	<p>{{$edukasi->desc}}</p>
	<p>{{$edukasi->street}}</p>
	<p>{{$edukasi->village}}</p>
	<p>{{$edukasi->city}}</p>
	<p>{{$edukasi->prov}}</p>
	<p>{{$edukasi->zipCode}}</p>
	<p>{{$edukasi->dateOrdered}}</p>
	<p>{{$edukasi->quota}}</p>
	<p>{{$edukasi->price}}</p>
	<a href="/produkEdukasi/{{$edukasi->id}}/edit" class="btn btn-info" role="button">Edit</a>
	<hr>

@endsection