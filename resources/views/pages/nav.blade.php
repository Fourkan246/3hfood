<nav class="navbar navbar-expand-xl navbar-light footer-color">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{url('/images/capture.png')}}" alt="Logo" style="width:40px;">
      </a>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('index') }}">Home</a>
      </li>

      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service Area
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Kandirpar</a>
          <a class="dropdown-item" href="#">Rajgonj</a>
          <a class="dropdown-item" href="#">Tomsom Bridge</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Your area will be added soon</a>
        </div>
      </li>


      <li class="nav-item">
          <a class="nav-link" href="#">Happy stories</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.create') }}">FAQ</a>
      </li>

    </ul>

    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>

    </div>

</nav>
