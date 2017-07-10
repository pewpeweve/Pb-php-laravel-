<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pb') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       @if(Auth::guest())
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
     	<div class="jumbotron">
        	<div class="text-center">
	        	<h1>{{$title}}</h1>
				<p>Hey welcome to my Personel Blog</p>
				<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
       		 </div>
			</div>
        </div>
       @else
       @include('inc.navbar')
			<h1>This is Home Page</h1>>
       @endif
    </div>

      


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>

