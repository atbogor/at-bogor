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
    /* height: 100%; */

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

  .headline.card {
    width: 95%;
    border-color: #FFFFFF !important;
  }

  .img-fluid {
    border-radius: 12px !important;
  }

  .ticket-content.card {
    border-radius: 12px !important;
    border: 2px solid #224121 !important;
    display: flex;
    overflow: hidden;
    background-color: #224121;
  }

  .btn-secondary.disabled {
    background-color: #FEE9CA !important;
    color: #142213 !important;
    border-radius: 40px;
    padding-inline: 1rem;
    opacity: 1;
  }

  .card-body {
    color: #FFFFFF !important;
    transition: 300ms ease-in;
  }

  .flex-container {
    display: flex;
    flex-direction: column;
  }

  .card-price {
    order: 1;
    margin-top: auto;
    color: #FB2000;
    align-self: bottom;
    padding-top: 2rem;
  }

  .flex-button {
    align-self: start;
  }

  .card-body:hover {
    background-color: #FB2000;
    color: putih;
    transition: 300ms ease-in;
  }

  #ticket-box:hover .card-price {
    color: #224121;
  }

  #ticket-box a {
    text-decoration: none;
  }

  #ticket-box:hover .card-body {
    background-color: #FB2000;
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

<section class="search_box " id="relativeContainer">
  <div class="search_form" id="absoluteContent">
    <div class="row justify-content-center">
      <form class="form-inline my-2 my-lg-0 justify-content-center" action="/tickets">
        @if(request('ticketcategory'))
      <input type="hidden" name="category" value="{{ request('ticketcategory') }}">
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
            @foreach ($tickets->shuffle()->take(5) as $ticket)
        <li class="nav-item">
        <a class="nav-link" href="/ticket/{{ $ticket->slug }}">Ticket to {{$ticket->title}}</a>
        </li>
      @endforeach
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Ticket to Taman Safari</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ticket to De Voyage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ticket to Curug Bidadari</a>
            </li>
          </ul> -->
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
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
          <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
              <a class="nav-link {{ !request('ticketcategory') ? 'active' : '' }}" aria-current="page"
                href="/tickets">All tickets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request('ticketcategory') == 'nature' ? 'active' : '' }}"
                href="/tickets?ticketcategory=nature">Nature</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request('ticketcategory') == 'history' ? 'active' : '' }}"
                href="/tickets?ticketcategory=history">History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request('ticketcategory') == 'entertainment' ? 'active' : '' }}"
                href="/tickets?ticketcategory=entertainment">Entertainment</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
  @if($tickets->count())
  <div class="container">
    <div class="row">
    @foreach ($tickets as $ticket)
    <div class="col-md-4 mb-5 d-flex" id="ticket-box">
    <a href="/ticket/{{ $ticket->slug }}" id="atickets">
    <div class="ticket-content card h-100">

      @if ($ticket->image)
    <img src="{{ asset('storage/' . $ticket->image) }}" class="card-img-top"
    alt="{{ $ticket->ticketcategory->name }}">
  @else
  <img src="https://picsum.photos/id/237/1600/900?{{ $ticket->ticketcategory->name }}" class="card-img-top"
  alt="...">
@endif

      <div class="card-body flex-container">
      <button class="btn btn-secondary mb-2 disabled flex-button">{{$ticket->ticketcategory->name}}</button>
      <h3 class="card-title">{{$ticket->title}}</h3>
      <h5 class="card-location">{{$ticket->location}}</h5>
      <h4 class="card-price">IDR {{$ticket->price}}</h4>
      </div>
    </div>
    </a>
    </div>
  @endforeach 
    </div>
@else
  <p class="text-center fs-4">No ticket found.</p>
@endif

    <div class="d-flex justify-content-center">
      {{ $tickets->links() }}
    </div>
</section>


@endsection

<script>
  function adjustRelativeContainerHeight() {
    var relativeContainer = document.getElementById('relativeContainer');
    var absoluteContent = document.getElementById('absoluteContent');
    relativeContainer.style.height = absoluteContent.offsetHeight + 'px';
  }

  window.onload = adjustRelativeContainerHeight;
  window.onresize = adjustRelativeContainerHeight;
</script>