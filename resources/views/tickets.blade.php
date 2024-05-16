@extends("layouts.main")
@section("container")

<style>
  /* .jumbo-container-fluid{
    background-color: red !important;
    width: 100%;
    background-image: url("https://eventpuncak.com/wp-content/uploads/2021/02/rafting-cisadane.jpg");
    background-size: cover;
    background-position: center;
    height: 60vh;
      margin-top: 0;
      position: relative;
      overflow: hidden;
    
  }
  
  .jumbotron,
    .jumbotron-fluid {
      padding: 0;
      margin: 0;
    } */

  .search_box{
    /* max-width: 1690px; */
    /* margin: 0 auto; */
    background-color: red;
    /* box-shadow: -1.717px 8.835px 85.56px 6.44px rgba(170, 170, 170, 0.29); */
    /* padding: 165px 0 100px; */
    position: relative;
    /* margin-top: px; */
    width: 100vw;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .banner_part {
  position: relative;
  background-image: url("https://eventpuncak.com/wp-content/uploads/2021/02/rafting-cisadane.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 60vh;
  /* background-color: #ffcc00; */
}

.search_box .search_form {
  background-color: #2E562C;
  /* padding: 80px 95px; */
  /* margin-bottom: 70px; */
  color: #fff;
  position: absolute;
  width: 70%;
  top: -50px;
  border-radius:20px;
  
}

.btn-success {
    background-color: #FB2000 !important;
    border-color: #224121 !important;
    color: #FEE9CA !important;
    border-top-left-radius: 0%;
    border-bottom-left-radius: 0%;
}

.form-control {
    border-color: #224121 !important;
    border-top-right-radius: 0%;
    border-bottom-right-radius: 0%;
    height: 100%;
    width: 25rem !important;
}
</style>

<div>
<!-- <div class="jumbotron jumbotron-fluid">
  <div class="jumbo-container-fluid">
    
    
  </div>
</div> -->
  <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                  
                 </div>
                </div>
            </div>
        </div>
  </section>

  <section class="search_box">
    <div class="container-fluid">
      <div class="row align-items-center">
        <!-- <div class="col-lg-8"> -->
          <div class="search_form">
            <div class="container mt-4">
              <div class="row justify-content-center mb-5">
                <form class="form-inline my-2 my-lg-0">
                 <input class="form-control " type="search" placeholder="Any idea for your next trip?" aria-label="Search">
                 <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
          </div>
        <!-- </div> -->
      </div>
    </div>
  </section>
    
</div>

@endsection