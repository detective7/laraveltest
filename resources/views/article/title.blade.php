@extends('app')
@section('content')
	<div id="overview">
		<div class="content-header"><h3>{{$title}}</h3></div>
		<div class="contain">
			<p>{!! $intro !!}</p>

			
			@foreach($news as $new)
				<a href="/new/{{$new->id}}"><h3>{{ $new -> title }}</h3></a>
				<a href="{{ action('NewController@show_id',[$new->id]) }}"><h4>{{ $new -> description }}</h4></a>
				<a href="{{ url('new',$new->id) }}"><h5>{{ $new -> created_at }}</h5></a>
				<h6>{{ $new -> updated_at }}</h6><hr>
			@endforeach
		</div>
	</div>
@endsection