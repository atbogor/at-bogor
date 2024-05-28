@extends("layouts.main")
@section("container")

<style>
    .testi-header .container-md{
        /* background-color: red !important; */
    }

    .all-testimonials .container-md{
        /* background-color: cyan !important; */
        height: 50%;
    }

    .testimonial{
        background-color: #FEE9CA;
        /* margin: auto; */
    }

    .all-testimonials::-webkit-scrollbar {
        width: 0; 
        background: transparent;  
    }

    .add-yours .btn {
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

  .testimonial-content{
    background-color: #;
  }
</style>

<section class="testi-header">
    <div class="container-md pt-5 pb-4">
        <h1>Testimonial</h2>
        <h5>Lorem ipsum dolor sit amet consectetur.</h5>

    </div>
</section>
<section class="all-testimonials d-flex justify-content-center " style="max-height: 50vh; overflow-y: auto;">

    @if($testimonials->count())
        <div class="container">
            <div class="row">
                <div class="container-md w-75">
                    <div class="row row-cols-sm-1 row-cols-md-3 g-5 g-lg-3">
                        @foreach ($testimonials as $testimonial)
                        <div class="col">
                            <div class="testimonial rounded-4 p-3 h-100">
                            <h5>{{$testimonial->users->username}}</h5>
                                <div class="testimonial-content">
                                    <p>{{$testimonial->testimonial_content}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
    </div>
@else
  <p class="text-center fs-4">No Testimonial found.</p>
@endif

</section>
<section class="add-yours mt-5">
    <div class="addyours-header d-flex justify-content-center">
        <h3>Add yours</h3>
    </div>
    <!-- <div class="form-testi">
    <input class="form-control " type="text" placeholder="Write your testimony about this site.." aria-label="search"
          name="search" value="{{ request('search') }}">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Send</button>
    </div> -->
    <div class="form d-flex justify-content-center">
        <div class="input-group mb-3 w-50">
            <input type="text" class="form-control" placeholder="Write your testimony about this site.." aria-label="user-testi" aria-describedby="user-testi">
            
            <button class="btn btn-outline-secondary" type="send" id="button-addon2">Send</button>
          
        </div>
    </div>
    

</section>



@endsection