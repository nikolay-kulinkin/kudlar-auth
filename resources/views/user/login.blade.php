@extends('layouts.main')

@section('title','Login page')

@section('content')
<h2>Login form</h2>
<form action="{{route('login.auth')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control"
            id="email" name="email"  placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control"
            id="password" name="password" placeholder="Password">
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" name="remember" type="checkbox" id="remember">
        <label class="form-check-label" for="remember">
            Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="{{route('password.request')}}" class="ms-2">Forgot password</a>
</form>
@endsection