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
            <a href="/mybooking/mybookings" class="list-group-item list-group-item-action">My Bookings</a>
            <a href="/mybooking/mytestimonial" class="list-group-item list-group-item-action">My Testimonial</a>
            <a href="/mybooking/myprofile" class="list-group-item list-group-item-action active">My Profile</a>
            <hr class="my-1 w-100">
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