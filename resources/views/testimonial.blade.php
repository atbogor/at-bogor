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
    border-top-left-radius: 5px !important;
    border-bottom-left-radius: 5px !important;
    /* padding: 8px 8px; */
  }

  .testimonial-content{
    background-color: #;
  }

 
/* .all-testimonials .masonry{
    width: 50vw;
    margin: 0px auto;
    columns: 3;
}

.all-testimonials .col{
   margin-bottom: 3rem;
} */

.masonry {
    column-count: 1;
    column-gap: 1rem;
    width: 90%;
    margin: 0 auto;
}

.masonry-item {
    display: inline-block;
    width: 100%;
    margin-bottom: 1rem;
    padding-left: 0;
    padding-right: 0;
}


.quote {
    padding-left: 1rem; /* Adjust space for the opening quote */
    padding-right: 1rem; /* Adjust space for the closing quote */
}
.quote::before,
.quote::after {
    color: #FB2000;
    font-weight: bold;
   
}

.quote::before {
    content: '“'; /* Tanda kutip pembuka */
    left: 0;
}

.quote::after {
    content: '”'; /* Tanda kutip penutup */
    /* right: 0; */
}

.testimonial .d-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 5px;
}

.username {
    margin: 0; /* Remove default margin */
    color: #224121;
    font-weight: 600;
}

.updated-at {
    font-size: 14px;
    color: #404040;
    opacity: 70%;
    margin: 0; /* Remove default margin */
}

.alert{
    
}


@media (min-width: 576px) {
    .masonry {
        column-count: 2;
    }
}

@media (min-width: 768px) {
    .masonry {
        column-count: 3;
    }
}
</style>

<section class="testi-header">
    <div class="container-md pt-5 pb-4">
        <h1>Testimonial</h2>
        <h5>Lorem ipsum dolor sit amet consectetur.</h5>

    </div>
</section>
<section class="all-testimonials d-flex justify-content-center" style="max-height: 50vh; overflow-y: auto;">
    @if($testimonials->count())
        <div class="container">
            <div class="masonry">
                @foreach ($testimonials as $testimonial)
                    <div class="col masonry-item">
                        <div class="testimonial rounded-4 p-3 h-100">
                            <div class="d-flex justify-content-between">
                                <h5 class="username">{{$testimonial->users->username}}</h5>
                                <p class="updated-at">{{ \Carbon\Carbon::parse($testimonial->updated_at)->format('M d, Y') }}</p>
                            </div>

                            <div class="testimonial-content">
                                <p class="quote" style="margin-bottom:0;">{{$testimonial->testimonial_content}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Testimonial found.</p>
    @endif
</section>

<section class="add-yours mt-5">
    <div class="addyours-header d-flex justify-content-center pb-4">
        <h3>Add yours</h3>
    </div>
    <!-- <div class="form-testi">
    <input class="form-control " type="text" placeholder="Write your testimony about this site.." aria-label="search"
          name="search" value="{{ request('search') }}">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Send</button>
    </div> -->
    @if (session('success'))
        <div class="alert-wrap d-flex justify-content-center">
            <div class="alert alert-success w-50">
                {{session('success')}}
            </div>    
        </div>
    @endif
    <div class="form d-flex justify-content-center">
        
            <form action="{{route("testimonials.store")}}" method="post" class="input-group mb-3 w-50">
                @csrf
                <input type="text" name="testimonial-content" class="form-control" placeholder="Write your testimony about this site.." aria-label="user-testi" aria-describedby="user-testi" required>
                <button class="btn btn-outline-secondary" type="send" id="button-addon2">Send</button>
            </form>
       
    </div>
    

</section>



@endsection