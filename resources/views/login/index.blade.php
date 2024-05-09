@extends('layouts.main_logreg')

@section('container')

<link rel="stylesheet" href="/css/login.css">

<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-signin">
      <form>
        <div class="d-flex align-items-center justify-content-center">
          <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Welcome back!</h1>

        <div class="form-floating mb-2">
          <label for="floatingInput">Email address</label>
          <input type="email" class="form-control border border-success" id="floatingInput"
            placeholder="name@example.com">
        </div>
        <div class="form-floating">
          <label for="floatingPassword">Password</label>
          <input type="password" class="form-control border border-success" id="floatingPassword"
            placeholder="Enter your password">
        </div>

        <button class="w-100 btn btn-secondary btn-success mt-4" type="submit">Sign In</button>
      </form>

      <small class="d-block text-center mt-2">
        Not registered? <a href="#" class="col-reg">Register Now!</a>
      </small>

    </main>
  </div>
</div>

@endsection