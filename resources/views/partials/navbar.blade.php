<link rel="stylesheet" href="/css/navbar.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"> <img src="/assets/atBogor-logo-navbar.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ ($active == "home") ? 'active' : ''}} " href="/">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link  {{ ($active == "gallery") ? 'active' : ''}} " href="/gallery">Gallery</a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ ($active == "ticket") ? 'active' : ''}}" href="/tickets">Ticket</a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ ($active == "post") ? 'active' : ''}} " href="/posts">Blog</a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ ($active == "testimonial") ? 'active' : ''}}" href="/testimonials">Testimonial</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
    </ul>

    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Welcome Back, {{auth()->user()->name}}
      </a>
      <ul class="dropdown-menu">
        <li>
        @can('admin')
      <a class="dropdown-item" href="/dashboard/tickets">My Dashboard</a>
      </li>
      <li>
      <hr class="dropdown-divider">
      </li>
    @endcan

        @auth
        @cannot('admin')
        <a class="dropdown-item" href="/mybooking/mybookings">My Bookings</a>
        </li>
        <li>
        <hr class="dropdown-divider">
        </li>
        @endcannot
      @endauth



      <li>
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="dropdown-item">
        Logout
        </button>
      </form>
      </li>
    </ul>
    </li>
  @else
  <li class="nav-item">
    <a class="btn navbars btn-primary" href="/login">Log In</a>
  </li>
@endauth
    </ul>

  </div>
</nav>