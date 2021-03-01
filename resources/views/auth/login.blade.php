@extends('layouts.master')

@section('title', 'Login')

@section('container')

	<h1>Login</h1>

	<hr>

	<form method="post" action="{{ route('auth.postLogin') }}">

		@csrf

		<div class="form-group">
			<label for="email">E-Mail:</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="password">Passwort:</label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>

		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
			<label class="form-check-label" for="remember_me">Remember me</label>
		</div>

		<button type="submit" class="btn btn-primary">
			<i class="fa fa-check"></i> Anmelden
		</button>

	</form>

@endsection
