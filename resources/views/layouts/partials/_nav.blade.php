<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href=" {{route('root_path')}} ">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link {{set_active_route('root_path')}} " href=" {{route('root_path')}} ">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{set_active_route('about_path')}} " href=" {{route('about_path')}} ">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Artisans</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Planet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Laravel.com</a>
          <a class="dropdown-item" href="#">Laravel.io</a>
          <a class="dropdown-item" href="#">Laracasts</a>
          <a class="dropdown-item" href="#">Larajobs</a>
          <a class="dropdown-item" href="#">Laravel news</a>
          <a class="dropdown-item" href="#">Laracachat</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <div class="nav navbar-nav navbar-right" style="margin-left:1200px;">

            <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
    </div>
  </div>
</nav>