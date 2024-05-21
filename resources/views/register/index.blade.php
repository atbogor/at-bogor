@extends('layouts.main_logreg')

@section('container')

<link rel="stylesheet" href="/css/login.css">

<style>
  .form-select {
    height: 37px;
  }

  .floatingInput {
    color: #214123;
  }

  .container {
    height: 90px;
  }

  .container {
    height: 90px;
  }

  .date.form-control {
    width: 70px;
  }

  .year.form-control {
    width: 100px;
  }

  .month-dropdown {
    box-shadow: 0 0 0 0.5px #214123;
  }

  .gender-floating-form {
    box-shadow: 0 0 0 0.5px #214123;
  }
</style>

<div class="row justify-content-center">
  <div class="col-md-4">

    <!-- disini nanti bs tambahin message kalau sukses apa engga -->

    <main class="form-signin">
      <form action="/register" method="post"> <!-- jangan lupa tambahin action dan method -->
        <!-- tambahin logic backend di setiap input kalau error gimana, sama id dan name jangan lupa ubah -->
        @csrf
        <div class="d-flex align-items-center justify-content-center">
          <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Create an account</h1>

        <div class="form-floating mb-2">
          <label for="name">Full Name</label>
          <input type="text" name="name" class="form-control border border-success @error('name') is-invalid @enderror"
            id="name" placeholder="Full Name" required value="{{ old('name') }}">

          @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror

        </div>

        <div class="form-floating mb-2">
          <label for="floatingInput">Email address</label>
          <input type="email" name="email"
            class="form-control border border-success @error('email') is-invalid @enderror" id="email"
            placeholder="name@example.com" required value="{{ old('email') }}">

          @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
        </div>

        <div class="form-floating mb-2">
          <label for="username">Username</label>
          <input type="text" name="username"
            class="form-control border border-success @error('username') is-invalid @enderror" id="username"
            placeholder="name123" required value="{{ old('username') }}">

          @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
        </div>

        <!-- <div class="row">
          <div class="col">
             <label class="floatingInput">Date of Birth</label>
            <div class="d-flex">
              <input type="text" class="date form-control border border-success me-2" id="floatingInput"
                placeholder="dd">
              <div style="width: 20px;"></div>
              <select class="month-dropdown form-control form-select me-2 border border-dark-green"
                aria-label="Default select example">
                <option selected>MMMM</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
              <div style="width: 20px;"></div>
              <input type="year" class="year form-control border border-success" id="floatingInput" placeholder="yyyy">
            </div> 
          </div>
        </div> -->

        <div class="form-floating mb-2">
          <label for="dob">Date Of Birth</label>
          <input type="date" name="dob" class="form-control border border-success @error('dob') is-invalid @enderror"
            id="dob" placeholder="Date Of Birth" required value="{{ old('dob') }}">
        </div>

        <div class="input-group-prepend"></div>

        <div class="form-floating mb-2">
          <label for="gender">Gender</label>
          <select name="gender"
            class="gender-floating-form form-select col-md-12 px-2 @error('gender') is-invalid @enderror" id="gender"
            aria-label=" Default select example" required value="{{ old('gender') }}">
            <option disabled {{ old('gender') === null ? 'selected' : '' }}>Gender</option>
            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
          </select>

          @error('gender')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
        </div>

        <div class="input-group-prepend">

        </div>

        <div class="form-floating">
          <label for="floatingPassword">Password</label>
          <input type="password" name="password"
            class="form-control border border-success @error('password') is-invalid @enderror" id="password"
            placeholder="Password" required placeholder="Enter your password" required>
          @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
        </div>

        <button class="w-100 btn btn-secondary btn-success mt-4" type="submit">Register</button>
      </form>

      <small class="d-block text-center mt-2">
        Already have an account? <a href="#" class="col-reg">Login</a>
      </small>

      <div class="container col-lg-4">

      </div>

    </main>
  </div>
</div>

@endsection