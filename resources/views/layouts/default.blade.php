<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scal=1">
    <title> {{page_title($title ?? '')}} </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style type="text/css">
    	body{
    		font-family: 'Open Sans',  Helvetica,Arial, sans-serif;
    	}
        footer {
            margin: 4em 0;
        }
    </style>

</head>
<body>
@include('layouts.partials._nav')

 @yield('content')
 @include('layouts.partials._footer') 	
 <script src="{{asset('js/jquery.js')}}"></script>
</body>
</html>