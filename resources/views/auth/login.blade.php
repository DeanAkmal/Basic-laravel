@extends('template.master')

@section('content')
<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-auto mt-5">
                    
                        <div class="card card-plain bg-white">
                            <div class="card-header bg-primary">
                                <h4 class="font-weight-bolder text-white">Login</h4>
                                <p class="mb-0 text-white">Enter your email and password to login</p>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('auth.authenticate') }}" method="post">
                                    @csrf
                                    @error('notif')
                                    <p class="login-box-msg error invalid-feedback" style="display: inline;">{{$message}}</p>
                                    @enderror
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control custom-input1 @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}">
                                        <label for="email">Email</label>
                                        @error('email')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" class="form-control custom-input1 @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                        <label for="password">Password</label>
                                        @error('password')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Login</button>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--   Core JS Files   -->
@endsection
