<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/myprofile.css">
    <title>Document</title>
</head>



<body>
    <div class="menu card px-3 py-2" style="width: 18rem;">
        <div class="card-header h3">
            {{ auth()->user()->name }}
        </div>
        <div class="list-group d-flex row-gap-3">
            <hr class="my-1 w-100">
            <a href="/myprofile" class="list-group-item list-group-item-action @yield('myprofileActive')">My Profile</a>
            <a href="/mybookings" class="list-group-item list-group-item-action @yield('mybookingActive')">My Bookings</a>
            <a href="/mytestimonials" class="list-group-item list-group-item-action @yield('mytestimonialActive')">My Testimonial</a>
            <hr class="my-0 w-100">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="list-group-item list-group-item-action">
                Logout
                </button>
            </form>
        </div>
    </div>


    
</body>

</html>