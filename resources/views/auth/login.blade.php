@extends('base')
@section('title')
<meta name="csrf-token" content="{{ csrf_token() }}">
    Login Screen
@endsection
@section('content')
<div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
<?php //print '<pre>'; print_r(session()->all()); print '</pre>'; ?>
@if(session('error'))
    <div class="alert alert-danger">{{ session('error'); }}</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul class="mb-0 mt-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-floating mb-3">
        <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <label for="email" :value="__('Email')" >Email address</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="password" class="block mt-1 w-full"
        type="password"
        name="password"
        required autocomplete="current-password" />

        <label for="password" :value="__('Password')">Password</label>
    </div>
    <div class="form-check mb-3">
        <input class="form-check-input" id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <label class="form-check-label" for="remember_me" >{{ __('Remember me') }}</label>
    </div>
    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <button class="btn btn-primary">{{ __('Log in') }}</button>
    </div>
</form>
@endsection


@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/scripts.js')}}"></script>
@endsection
