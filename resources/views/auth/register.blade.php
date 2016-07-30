@extends('layout')
@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>Register</h1>
    <form action="/auth/register" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name:</label>
          <input class="form-control" type="text" name="name" id="name" value="{{ old("name") }}">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
          <input class="form-control" type="email" name="email" id="email" value="{{ old("email") }}">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
          <input class="form-control" type="password" name="password" id="password" value="{{ old("password") }}">
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
          <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" value="{{ old("password_confirmation") }}">
      </div>

      <button class="btn btn-default" type="submit">
          Register
      </button>
    </form>
  </div>
</div>
@endsection
