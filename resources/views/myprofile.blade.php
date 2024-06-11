@extends('layouts.main') @section('container')

<link rel="stylesheet" href="/css/myprofile.css">

<div class="my-profile-page ml-4 mr-4 mt-5 d-flex justify-content-evenly">
    
    <div class="card p-3" style="width: 18rem;">
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
    <div class="content col-9 card p-3">
        <div class="title h3 px-3 py-2">
            Personal Info
        </div>
        <div class="personal-info-container px-3 py-2 d-flex flex-column row-gap-3">
            <div class="personal-info-section">
                <label class="form-label ">Full Name</label>
                <input class="form-control " placeholder="Catherine Olivia Winanda">
            </div>
            <div class="personal-info-section">
                <label class="form-label ">Username</label>
                <input class="form-control " placeholder="ketrin">
            </div>
            <div class="email-dob-container d-flex justify-content-evenly gap-3">

                <div class="personal-info-section flex-fill">
                    <label class="form-label ">Email</label>
                    <input class="form-control " placeholder="catherinewinanda@example.com">
                </div>
                <div class="personal-info-section flex-fill">
                    <label class="form-label ">Date of birth</label>
                    <input class="form-control " placeholder="Ini tanggal">
                </div>
            </div>
        </div>
    </div>

</div>




@endsection
