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


  .search_box {
    /* max-width: 1690px; */
    /* margin: 0 auto; */
    /* background-color: red; */
    /* box-shadow: -1.717px 8.835px 85.56px 6.44px rgba(170, 170, 170, 0.29); */
    /* padding: 165px 0 100px; */
    position: relative;
    /* margin-top: px; */
    width: 100%;
    height: 25vh;

    display: flex;
    align-items: center;
    justify-content: center !important;

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
    padding: 2% 2%;
    /* margin-bottom: 70px; */
    color: #fff;
    position: absolute;
    width: 80%;
    top: -50px;
    border-radius: 20px;
    max-width: none !important;

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
    width: 50% !important;
    /* padding: 8px 8px; */
  }

  .form-inline {
    width: 70%;
  }

  .recommendation .row {
    /* height:70% !important; */
    justify-content: center !important;
    height: 100%;
  }

  .nav-pills .nav-item {
    background-color: #FEE9CA;
    border-radius: 10px;
    margin: 5px;

  }

  .nav-pills .nav-item .active {
    background-color: #224121;
    border-radius: 10px;
    color: #FEE9CA;
  }

  .nav-pills .nav-item a.active {
    color: #FEE9CA !important;
  }

  .nav-pills .nav-item a {
    color: #224121 !important;
  }

  u {
    color: #FFFFFF;
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

<section class="search_box ">
  <div class="search_form">
    <div class="row justify-content-center">
      <form class="form-inline my-2 my-lg-0 justify-content-center" action="/posts">
        @if(request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
        <input class="form-control " type="text" placeholder="Any idea for your next trip?" aria-label="search"
          name="search" value="{{ request('search') }}">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <div class="recommendation">
      <div class="row-fluid justify-content-center mt-4">
        <div class="col justify-content-center">
          <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="/posts">Tiket ke Jungleland</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts?category=nature">Tiket ke Kebun Raya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts?category=history">Tiket ke Taman Safari</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts?category=entertainment">Tiket ke De Voyage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/posts?category=entertainment">Tiket ke Curug Bidadari</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="feed justify-content-center">
  <div class="container justify-content-center">
    <div class="header">
      <h1 class="text-center">All tickets</h1>
    </div>
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
          <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
              <a class="nav-link {{ !request('category') ? 'active' : '' }}" aria-current="page" href="/posts">All
                Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request('category') == 'nature' ? 'active' : ''}}"
                href="/posts?category=nature">Nature</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request('category') == 'history' ? 'active' : ''}}"
                href="/posts?category=history">History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request('category') == 'entertainment' ? 'active' : ''}}"
                href="/posts?category=entertainment">Entertaiment</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="row">
    @foreach ($tickets as $ticket)
    <div class="col-md-4 mb-5 d-flex">
      <div class="blog-content card h-100">
        <img src="https://source.unsplash.com/1600x900/?" class="card-img-top" alt="...">
        <div class="card-body">
          <a class="btn btn-secondary mb-2 disabled" href="#">{{$ticket->ticketcategory->name}}</a>
          <h5 class="card-title">{{$ticket->title}}</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                                                                                                                                                                                                                                                                                                                                                                                                                                    the
                                                                                                                                                                                                                                                                                                                                                                                                                                                    card's content.</p> -->
          <p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#"><u>Read
                now</u></a>
        </div>
      </div>
    </div>
    @endforeach
    
    </div>
  </div>
  </div>
  

  </div>
</section>


@endsection