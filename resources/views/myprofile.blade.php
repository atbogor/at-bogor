@extends('layouts.main') @section('container')

<link rel="stylesheet" href="/css/myprofile.css">

<div class="my-profile-page ml-4 mr-4 mt-5 d-flex justify-content-evenly">
    <div class="menu-container">

    
    <div class="menu card p-3" style="width: 18rem;">
        <div class="card-header h3">
            Catherine Olivia Winanda
        </div>
        <div class="list-group d-flex row-gap-3">
            <hr class="my-1 w-100">
            <a href="#" class="list-group-item list-group-item-action">My Bookings</a>
            <a href="#" class="list-group-item list-group-item-action">My Testimonial</a>
            <a href="#" class="list-group-item list-group-item-action active">My Profile</a>
            <hr class="my-1 w-100">
            <a href="#" class="list-group-item list-group-item-action">Log Out</a>
        </div>
    </div>
    </div>
    
    <div class="content col-9 card p-3 pe-0">
        <div class="title h3 px-3 py-2">
            Personal Info
        </div>
        <div class="personal-info-container px-3 py-2 d-flex flex-column row-gap-3">
            <div class="personal-info-section">
                <label class="form-label h5">Full Name</label>
                <input class="form-control " placeholder="Catherine Olivia Winanda">
            </div>
            <div class="personal-info-section">
                <label class="form-label h5">Username</label>
                <input class="form-control " placeholder="ketrin">
            </div>
            <div class="email-dob-container d-flex justify-content-evenly gap-3">

                <div class="personal-info-section flex-fill">
                    <label class="form-label h5">Email</label>
                    <input class="form-control " placeholder="catherinewinanda@example.com">
                </div>
                <div class="personal-info-section flex-fill">
                    <label class="form-label h5">Date of birth</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="personal-info-section d-flex flex-column">
                <label class="form-label h5">Gender</label>
                <div class="gender-button-container d-flex gap-3">

                    <button class="gender-button btn p-3" id="male">
                        <img src="{{ asset("assets/gender/male-icon.png") }}" alt="">
                        <h6>Male</h6>
                    </button>

                    <button class="gender-button btn p-3 active" id="female">
                        <img src="{{ asset("assets/gender/female-icon.png") }}" alt="">
                        <h6>Female</h6>
                    </button>

                </div>
            </div>
            <div class="my-profile-save-cancel-button d-flex gap-3 ">
                <button type="button" class="save-button btn px-3">Save</button>
                <button type="button" class="cancel-button btn px-3">Cancel</button>
            </div>


        </div>
    </div>

</div>




@endsection
