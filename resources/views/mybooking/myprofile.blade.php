
@extends('mybooking.layout.main')

@section('content')
<link rel="stylesheet" href="/css/myprofile.css">

<div class="my-profile-page ml-4 mr-4 mt-5 d-flex justify-content-evenly">
    
    <div class="content col-9 card p-3 pe-0">
        <div class="title h3 px-3 py-2">
            Personal Info
        </div>
        <div class="personal-info-container px-3 py-2 d-flex flex-column row-gap-3">
            <form method="post" action="/mybooking/myprofile/saveprofile">
                @method("put")
                @csrf
            
                <div class="personal-info-section">
                    <label class="form-label h5">Full Name</label>
                    <input id="name" name="name" class="form-control " placeholder="{{ auth()->user()->name }}">
                </div>
                <div class="personal-info-section">
                    <label class="form-label h5">Username</label>
                    <input id="username" name="username" class="form-control " placeholder="{{ auth()->user()->username }}">
                </div>
                    <div class="email-dob-container d-flex justify-content-evenly gap-3">

                    <div class="personal-info-section flex-fill">
                        <label id="email" name="email" class="form-label h5">Email</label>
                        <input class="form-control " placeholder="{{ auth()->user()->email }}">
                    </div>
                    <div class="personal-info-section flex-fill">
                        <label id="dob" name="dob" class="form-label h5">Date of birth</label>
                        <input type="date" class="form-control" placeholder="{{ auth()->user()->dob }}">
                    </div>
                </div>
                <div class="personal-info-section d-flex flex-column">
                    <label class="form-label h5">Gender</label>
                    <div class="gender-button-container d-flex gap-3">
                        @if (auth()->user()->gender == "Male")
                            <button class="gender-button btn p-3 active" id="male">
                                <img src="{{ asset("assets/gender/male-icon.svg") }}" alt="">
                                <h6>Male</h6>
                            </button>

                            <button class="gender-button btn p-3" id="female">
                                <img src="{{ asset("assets/gender/demale-icon.svg") }}" alt="">
                                <h6>Female</h6>
                            </button>
                        @else
                            <button class="gender-button btn p-3" id="male">
                                <img src="{{ asset("assets/gender/male-icon.svg") }}" alt="">
                                <h6>Male</h6>
                            </button>

                            <button class="gender-button btn p-3 active" id="female">
                                <img src="{{ asset("assets/gender/demale-icon.svg") }}" alt="">
                                <h6>Female</h6>
                            </button>
                        @endif
                    </div>
                </div>
                <div class="my-profile-save-cancel-button d-flex gap-3 ">
                    <button type="submit" class="save-button btn px-3">Save</button>
                    <button type="button" class="cancel-button btn px-3">Cancel</button>
                </div>
            </form>

        </div>
    </div>

</div>




@endsection
