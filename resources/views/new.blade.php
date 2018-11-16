@extends('app')
@section('content')

	<h3>{{ $new -> title }}</h3>
	<h4>{{ $new -> description }}</h4>
	<h5>{{ $new -> created_at }}</h5>
	<h6>{{ $new -> updated_at }}</h6><hr>


@endsection