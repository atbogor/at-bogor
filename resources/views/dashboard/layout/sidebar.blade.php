<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/sidebar.css">
  <title>Document</title>
</head>

<style>
</style>

<body>
  <!-- <main class="d-flex flex-nowrap"> -->

  <div class="inisidebar d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32">
        <use xlink:href="#bootstrap" />
      </svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/dashboard/tickets" class="nav-link link-dark" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16">
            <use xlink:href="#home" />
          </svg>
          Tickets
        </a>
      </li>
      <li>
        <a href="/dashboard/posts" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16">
            <use xlink:href="#speedometer2" />
          </svg>
          Blogs
        </a>
      </li>
      <li>
        <a href="/dashboard/galleries" class="nav-link link-dark">
          <svg class="bi pe-none me-2" width="16" height="16">
            <use xlink:href="#speedometer2" />
          </svg>
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