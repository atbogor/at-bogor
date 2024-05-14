@extends('layouts.main_logreg')

@section('container')

<link rel="stylesheet" href="/css/login.css">

<div class="row justify-content-center">
  <div class="col-md-4">

    <!-- disini nanti bs tambahin message kalau sukses apa engga -->
    @if(session()->has('success'))
    <div class = "alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class = "alert alert-danger alert-dismissible fade show" role="alert">
      {{session('loginError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif



    <main class="form-signin">
      <form action = "/login" method= "post"> 
        @csrf 
        <!-- tambahin logic backend di setiap input kalau error gimana, sama id dan name jangan lupa ubah -->
        <div class="d-flex align-items-center justify-content-center">
          <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Welcome back!</h1>

        <div class="form-floating mb-2">
          <label for="email">Email address</label>
          <input type="email" name = "email"class="form-control border border-success @error('email') is-invalid @enderror" id="email"
            placeholder="name@example.com" autofocus required value="{{ old ('email')}}">
            @error('email')
            <div class = "invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-floating">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control border border-success" id="password"
            placeholder="Enter your password" required>
        </div>

        <button class="w-100 btn btn-secondary btn-success mt-4" type="submit">Sign In</button>
      </form>

      <small class="d-block text-center mt-2">
        Not registered? <a href="/register" class="col-reg">Register Now!</a>
      </small>

    </main>
  </div>
</div>

@endsection