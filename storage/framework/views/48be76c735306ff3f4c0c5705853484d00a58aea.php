<nav id="topbar" class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="<?php echo e(asset('home')); ?>">
        <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> -->
        <i class="fas fa-crop-alt"></i>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item <?php echo e(Request::is('oxy') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(asset('oxy')); ?>">Oxy'z</a>
      </li>
      
      <li class="nav-item <?php echo e(Request::is('meo') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(asset('meo')); ?>">Meo</a>
      </li>
      <li class="nav-item <?php echo e(Request::is('biolux') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(asset('biolux')); ?>">Biolux</a>
      </li>

      <li class="nav-item <?php echo e(Request::is('experience') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(asset('experience')); ?>">Experience</a>
      </li>
      <li class="nav-item <?php echo e(Request::is('blogs') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(asset('blogs')); ?>">Blogs</a>
      </li>
      <li class="nav-item <?php echo e(Request::is('contact') ? 'active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(asset('contact')); ?>">Contact</a>
      </li>


    </ul>

  </div>
</nav>

<?php /* C:\xampp\htdocs\meoair\resources\views/inc/topbar.blade.php */ ?>