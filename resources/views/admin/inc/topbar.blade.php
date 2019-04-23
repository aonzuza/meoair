<nav id="admin-topbar" class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="{{asset('home')}}">
        <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> -->
        <i class="fas fa-crop-alt"></i>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon"></span> -->
    <i class="fas fa-bars" style="color:white;"></i>


  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item {{Request::is('admin/sales') ? 'active' : ''}}">
        <a class="nav-link" href="{{asset('admin/sales')}}">Sales</a>
      </li>


      <li class="nav-item {{Request::is('admin/experience') ? 'active' : ''}}">
        <a class="nav-link" href="{{asset('admin/experience')}}">Experience</a>
      </li>





      @if (!Auth::guest())

  <li class="nav-item">
      <a class="nav-link active text-uppercase" title="logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            {{ Auth::user()->name }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
      </form>
  </li>
    @else
    <li class="nav-item {{Request::is('admin/login') ? 'active' : ''}}">
      <a class="nav-link" href="{{asset('admin/login')}}">LOGIN</a>
    </li>
    @endif

    </ul>

  </div>
</nav>
