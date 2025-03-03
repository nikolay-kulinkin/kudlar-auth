@extends('layouts.main')

@section('title','Login page')

@section('content')
<h2>Forgot password</h2>
<p>Введите свой email для получения ссылки на сброс пароля</p>
<form action="{{route('password.email')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror"
            id="email" name="email" value="{{old('email')}}" placeholder="Email">
        @error('email')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    
   
    <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection