<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/myprofile.css">
    <title>Document</title>
</head>



<body>
    <div class="menu card px-3 py-2 mx-5 mt-5" style="width: 18rem;">
        <div class="card-header h3">
          <a href="/" class="d-flex justify-content-center align-items-center mb-3 mb-md-0 link-dark text-decoration-none">
            <img class="mb-2" src="{{ asset('assets/atBogor-logo-reglog.png') }}" alt="" width="" height="57">
          </a>
        </div>
        <div class="list-group d-flex row-gap-3 pb-4">
            <hr class="my-1 w-100">
            <a href="/dashboard/tickets" class="list-group-item list-group-item-action @yield('ticketActive')">
              <i class="fa-solid fa-ticket mr-2" style="margin-right: 10px"></i>
              Tickets
            </a>
            <a href="/dashboard/posts" class="list-group-item list-group-item-action @yield('blogActive')">
              <i class="fa-solid fa-newspaper mr-2" style="margin-right: 10px"></i>
              Blogs
            </a>
            <a href="/dashboard/galleries" class="list-group-item list-group-item-action @yield('galleryActive')">
              <i class="fa-solid fa-image" style="margin-right: 10px"></i>
              Galleries
            </a>
        </div>
    </div>


    
</body>

</html>