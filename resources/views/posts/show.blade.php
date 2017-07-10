@extends('layouts.app')

@section('content')
<div class="container-fluid">
	

	
	<div class="jumbotron text-center">
		<h2>{{$post->title}}</h2>
		<img style="width: 20%" src="/storage/cover_images/{{$post->cover_image}}">
		<br><br>
		<div>
			{!!$post->body!!}	
		</div>
		<hr>
		<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
		<hr>
		<a href="/posts" class="btn btn-default pull-left">Go Back</a>
		@if(!Auth::guest()) {{-- this command make authtentcation in the show template for the guest cant be seen for the buttons below--}}
		@if(Auth::user()->id == $post->user_id){{-- this command make authtentcation in the show template for the user to only can edit or del its own post--}}
		<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
		{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=> 'pull-right'])!!}
			{{Form::hidden('_method','DELETE')}}
			{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
		{!!Form::close()!!}
		@endif
		@endif
	</div>
	
</div>
@endsection