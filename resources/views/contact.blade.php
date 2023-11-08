@extends('layout')

@section('title', 'Contact')

@section('content')
	<h1>Contact</h1>
	<form action={{ route('contact') }} method="POST">
		@csrf
		<input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}

		<input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
		{!! $errors->first('email', '<small>:message</small><br>') !!}

		<input name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
		{!! $errors->first('subject', '<small>:message</small><br>') !!}

		<textarea name="message" placeholder="Mensaje..." value="{{ old('message') }}"></textarea><br>
		{!! $errors->first('message', '<small>:message</small><br>') !!}

		<button>Enviar</button>
	</form>
@endsection