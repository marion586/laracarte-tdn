@extends('layouts.default')

@section('content')
 <div class="container">
<h2>What is Laracarte</h2>
<p>Laracarte is a  a clone of app <a href="https://laramap.com" >Laramap.com</a></p>
<div class="row">
	<div class="col-md-6">
		<p class="alert alert-warning">
			<strong> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This apps has built by @etsmo for learning purposes.</strong>
		</p>
	</div>
</div>
<p>Feel free to improve the <a href="#">Source code</a></p>
<hr>
<h2>What is Laramap?</h2>
<p>Laramap is  a website that laracarte is inspired :).</p>
<p>More info <a href="https://laramap.com/p/about">here</a></p>
<hr>
<h2>Which tools and service are used in laracarte?</h2>
<p>Basically it's built on laravel &amp; Bootstrap. But there's a bunch of service  used for email and other sections</p>
<ul>
	<li>Laravel</li>
	<li>Bootstrap</li>
	<li>Amazon S3</li>
	<li>Mandrill</li>
	<li>Google maps</li>
	<li>Gravatar</li>
	<li>Antoniy Martin's Geolocalisation package</li>
	<li>Michel fortun's Markdown parser package</li>
	<li>Heroku</li>
</ul>
</div>
@stop