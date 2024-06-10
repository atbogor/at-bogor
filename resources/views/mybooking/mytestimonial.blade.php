@extends('mybooking.layout.main')
@section('content')
<style>
    h2 {
        color: #214123;
    }

    .date {
        color: #FB2000
    }

    .testi {
        color: #214123
    }
</style>

<div class="container mt-5">
    <h2><b>My Testimonial</b></h2>
    <br>
    <div class="col-md-10">
        @foreach ($testimonials as $testimonial)
            <div class="card card-testi">
                <div class="card-body">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-9 d-flex align-items-center">
                                <p class="testi">{{$testimonial->testimonial_content}}</p>
                            </div>
                            <div class="col-md-3 d-flex justify-content-end">
                                <p class="date">{{ \Carbon\Carbon::parse($testimonial->updated_at)->format('m/d/Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

    <div class="d-flex justify-content-center align-items-center">
        {{ $testimonials->links() }}
    </div>
</div>


@endsection