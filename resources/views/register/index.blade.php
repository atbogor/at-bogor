@extends('layouts.main_logreg')

@section('container')

<link rel="stylesheet" href="/css/login.css">

<style>
    .form-select{
        height: 37px;
    }

    .container{
        height: 90px;
    }

    .date.form-control{
        width:10px;
    }


</style>

<div class="row justify-content-center">
  <div class="col-md-4">

    <!-- disini nanti bs tambahin message kalau sukses apa engga -->

    <main class="form-signin">
      <form> <!-- jangan lupa tambahin action dan method -->
        <!-- tambahin logic backend di setiap input kalau error gimana, sama id dan name jangan lupa ubah -->
        <div class="d-flex align-items-center justify-content-center">
          <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        </div>
        <h1 class="h3 mb-3 fw-normal text-center">Create an account</h1>

        <div class="form-floating mb-2">
          <label for="floatingInput">Full Name</label>
          <input type="name" class="form-control border border-success" id="floatingInput"
            placeholder="Name">
        </div>
        <div class="form-floating mb-2">
          <label for="floatingInput">Email address</label>
          <input type="email" class="form-control border border-success" id="floatingInput"
            placeholder="name@example.com">
        </div>
        <div class="form-floating mb-2">
          <label for="floatingInput">Username</label>
          <input type="user" class="form-control border border-success" id="floatingInput"
            placeholder="name123">
        </div>

        <div class="form-floating mb-2">
          <label for="floatingInput">Date of Birth</label>
          <input type="text" class="date form-control border border-success" id="floatingInput"
            placeholder="dd">
          <select class="form-select col-md-4 px-2" aria-label="Default select example">
                <option selected>Month</option>
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
            <input type="year" class="form-control border border-success col-md-2" id="floatingInput"
            placeholder="yyy">
        </div>
        <div class="input-group-prepend"></div>

        <div class="form-floating mb-2">
          <label for="floatingInput">Gender</label>
          <select class="form-select col-md-12 px-2" aria-label="Default select example">
                <option selected>Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
                </select>
        </div>
        <div class="input-group-prepend">
            
        </div>

        <div class="form-floating">
          <label for="floatingPassword">Password</label>
          <input type="password" class="form-control border border-success" id="floatingPassword"
            placeholder="Enter your password">
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