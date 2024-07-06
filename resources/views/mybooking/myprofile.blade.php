@extends('mybooking.layout.main')


@section('content')
<link rel="stylesheet" href="/css/myprofile.css">


    <div class="content card">
        <div class="title h3 py-2">
            Personal Info
        </div>
        
        <div class="personal-info-container py-2 ">
            <form method="post" action="/mybooking/myprofile/saveprofile" class="d-flex flex-column row-gap-3">
                @method("put")
                @csrf
            
                <div class="personal-info-section">
                    <label class="form-label h5">Full Name</label>
                    <input type = "text" id="name" name="name" class="form-control " placeholder="{{ auth()->user()->name }}">
                </div>
                <div class="personal-info-section">
                    <label class="form-label h5">Username</label>
                    <input type = "text" id="username" name="username" class="form-control " placeholder="{{ auth()->user()->username }}">
                </div>
                    <div class="email-dob-container d-flex justify-content-evenly gap-3">

                    <div class="personal-info-section flex-fill">
                        <label  class="form-label h5">Email</label>
                        <input type = "text" id="email" name="email" class="form-control " placeholder="{{ auth()->user()->email }}">
                    </div>
                    <div class="personal-info-section flex-fill">
                        <label  class="form-label h5">Date of birth</label>
                        <input  id="dob" name="dob" type="date" class="form-control" placeholder="{{ auth()->user()->dob }}" value="{{ auth()->user()->dob }}">
                    </div>
                </div>
                <div class="personal-info-section d-flex flex-column">
                    <label class="form-label h5">Gender</label>
                    <div class="gender-button-container d-flex gap-3">
                        <button type="button" class="gender-button btn p-3 {{ auth()->user()->gender == 'Male' ? 'active' : '' }}" id="male" onclick="setGender('male')">
                            <img src="{{ asset('assets/gender/male-icon.svg') }}" alt="">
                            <h6>Male</h6>
                        </button>
                        <button type="button" class="gender-button btn p-3 {{ auth()->user()->gender == 'Female' ? 'active' : '' }}" id="female" onclick="setGender('female')">
                            <img src="{{ asset('assets/gender/demale-icon.svg') }}" alt="">
                            <h6>Female</h6>
                        </button>
                        <input type="hidden" name="gender" id="gender" value="{{ auth()->user()->gender }}">
                    </div>
                </div>
                <div class="my-profile-save-cancel-button d-flex gap-3 ">
                    <button type="submit" class="save-button btn px-3">Save</button>
                    <a  href ="/mybooking/myprofile"class="cancel-button btn px-3">Cancel</a>
                </div>
            </form>

        </div>
    </div>



<script>
    function setGender(gender) {
        document.getElementById('male').classList.remove('active');
        document.getElementById('female').classList.remove('active');
        
        document.getElementById(gender).classList.add('active');
        
        // Set the hidden input value to the selected gender
        document.getElementById('gender').value = gender === 'male' ? 'Male' : 'Female';
    }
</script>


@endsection
