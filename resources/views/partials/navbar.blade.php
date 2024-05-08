<style>
  body {
    font-family: 'SF Pro Display', sans-serif;
    font-weight: 500;
  }

  .bg-light {
    background-color: #224121 !important;
  }

  .navbar-brand,
  .navbar-nav,
  .nav-link {
    color: #FFB49F !important;
  }

  .btn-primary {
    background-color: #FFB49F !important;
    border-color: #FFB49F !important;
    color: #FB2000 !important;
    width: 100px;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">@Bogor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/gallery">Gallery</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ticket">Ticket</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/posts">Blog</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/testimonial">Testimonial</a>
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
      Welcome Back, Cath
      </a>
      <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li>
        <button type="submit" class="dropdown-item">
        Logout
        </button>
      </li>
      </ul>
    </li>
  @else
  <li class="nav-item">
    <a class="btn btn-primary" href="/login">Log In</a>
  </li>
@endauth
    </ul>

  </div>
</nav>