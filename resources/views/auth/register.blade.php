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
                            <div class="card-header">
                                <h4 class="font-weight-bolder">Sign Up</h4>
                                <p class="mb-0">Enter your email and password to register</p>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('register.store') }}" method="post">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control custom-input1 @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
                                        <label for="name">Name</label>
                                        @error('name')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
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
                                    <div class="form-floating mb-3">
                                      <input type="password" name="password_confirmation" class="form-control custom-input1" id="password_confirmation" placeholder="Confirm Password">
                                      <label for="password_confirmation">Confirm Password</label>
                                  </div>

<div class="form-floating mb-3">
  <textarea name="bio" class="form-control custom-input1 @error('bio') is-invalid @enderror" id="bio" placeholder="Bio">{{ old('bio') }}</textarea>
  <label for="bio">Bio</label>
  @error('bio')
  <span class="error invalid-feedback">{{ $message }}</span>
  @enderror
</div>
<div class="form-floating mb-3">
  <input type="text" name="umur" class="form-control custom-input1 @error('umur') is-invalid @enderror" id="umur" placeholder="umur" value="{{ old('umur') }}">
  <label for="umur">Umur</label>
  @error('umur')
  <span class="error invalid-feedback">{{ $message }}</span>
  @enderror
</div>
<div class="form-floating mb-3">
  <textarea name="alamat" class="form-control custom-input1 @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat">{{ old('alamat') }}</textarea>
  <label for="alamat">Alamat</label>
  @error('alamat')
  <span class="error invalid-feedback">{{ $message }}</span>
  @enderror
</div>
                                    <div class="form-check form-check-info text-start ps-0">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree to the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    Already have an account?
                                </p>
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
