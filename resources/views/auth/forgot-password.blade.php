@extends('base')
@section('title')
    Forgot Password Screen
@endsection
@section('content')
<div class="card-header"><h3 class="text-center font-weight-light my-4">Forgot Password</h3></div>
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
<form method="POST" action="{{ route('password.email') }}">
    <div class="form-floating mb-3">
        <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        <label for="email" :value="__('Email')" >Email address</label>
    </div>

    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
        <button class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
    </div>
</form>
@endsection


@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/scripts.js')}}"></script>
@endsection
