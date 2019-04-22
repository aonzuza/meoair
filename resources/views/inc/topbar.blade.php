<nav id="topbar" class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="{{asset('home')}}">
        <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> -->
        <i class="fas fa-crop-alt"></i>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item {{Request::is('oxy') ? 'active' : ''}}">
        <a class="nav-link" href="{{asset('oxy')}}">Oxy'z</a>
      </li>
      
      <li class="nav-item {{Request::is('meo') ? 'active' : ''}}">
        <a class="nav-link" href="{{asset('meo')}}">Meo</a>
      </li>
      <li class="nav-item {{Request::is('biolux') ? 'active' : ''}}">
        <a class="nav-link" href="{{asset('biolux')}}">Biolux</a>
      </li>

      <li class="nav-item {{Request::is('experience') ? 'active' : ''}}">
        <a class="nav-link" href="{{asset('experience')}}">Experience</a>
      </li>
      <li class="nav-item {{Request::is('blogs') ? 'active' : ''}}">
        <a class="nav-link" href="{{asset('blogs')}}">Blogs</a>
      </li>
      <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link" href="{{asset('contact')}}">Contact</a>
      </li>


    </ul>

  </div>
</nav>
