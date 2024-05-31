<nav class="navbar bg-body-tertiary fixed-top navbar-expand-lg" style="padding:0;">
  <div class="container-fluid navbar-container-holder">
    <a class="navbar-brand" href="<?php echo get_site_url();?>"><img class="img-fluid ej-tumblers-navbar-logo" src="<?php echo get_theme_file_uri().'/photos/tumbler-main-svg-edited.svg';?>"></a>
    <div class="toggle-button-wrapper">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a class="navbar-brand" href="/"><img class="img-fluid ej-tumblers-navbar-logo" src="<?php echo get_theme_file_uri().'/photos/tumbler-main-svg-edited.svg';?>"></a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo get_site_url();?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_site_url().'/shop/';?>">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Personalize</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_site_url().'/about/';?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_site_url().'/contact/';?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_site_url().'/cart/';?>"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg></a>
          </li>
          
        </ul>
        <!-- <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form> -->
        <div style="min-width:350px;"><?php echo do_shortcode('[fibosearch]'); ?></div>
        
      </div>
    </div>
  </div>
</nav>