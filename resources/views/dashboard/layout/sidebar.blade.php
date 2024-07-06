<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/sidebar.css">
  <title>Document</title>
</head>

<style>
   .nav-link {
      color: #224121;
    }
    .nav-link.active {
      background-color: #224121 !important;
      color: white;
    }
</style>

<body>
  <!-- <main class="d-flex flex-nowrap"> -->

  <div class="inisidebar d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh">
    <a href="#" class="d-flex justify-content-center align-items-center mb-3 mb-md-0 link-dark text-decoration-none">
      <img class="mb-2" src="{{ asset('assets/atBogor-logo-reglog.png') }}" alt="" width="" height="57">
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item mb-2">
        <a href="/dashboard/tickets" class="nav-link link-white @yield('ticketActive')" aria-current="page">
          <i class="fa-solid fa-ticket mr-2"></i>
          Tickets
        </a>
      </li>
      <li class="nav-item mb-2">
        <a href="/dashboard/posts" class="nav-link link-white @yield('blogActive')">
          <i class="fa-solid fa-newspaper mr-2"></i>
          Blogs
        </a>
      </li>
      <li class="nav-item mb-2">
        <a href="/dashboard/galleries" class="nav-link link-white @yield('galleryActive')">
          <i class="fa-solid fa-image"></i>
          Galleries
        </a>
      </li>
    </ul>
  </div>
  <!-- </main> -->


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js">

    
  </script>
</body>

</html>