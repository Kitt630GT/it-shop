@extends('layouts.admin.master')
@section('content')
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <center>
                <img src="{{asset('admin/images/logo.png')}}">
            </center>
            <span class="login100-form-title p-b-34 p-t-15">
                Reset Password
            </span>

            <div class="wrap-input100 validate-input" data-validate = "Enter email">
                <input class="input100" type="email" name="email" placeholder="Email">
                <span class="focus-input100" data-placeholder="&#xf2da;"></span>
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Send Password Reset Link
                </button>
            </div>
        </form>
@endsection
