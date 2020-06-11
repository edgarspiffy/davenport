<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body  <?php body_class()?>>

  <div class="topbar py-2 text-center text-md-right">
    <a class='px-3' href="">Give Ashley a Call (310) 504-3989</a>
  </div>


  <nav style='min-height:16vh;' class="shadow-lg navbar navbar-expand-lg">
    <!-- Brand -->
    
    <a class="navbar-brand" href="<?php echo site_url();?>">
      <img src="<?php echo get_theme_file_uri('images/branding/banner.jpeg') ?>" alt="logo">
    </a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <i class="gavel fas fa-gavel"></i>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link px-3" href="<?php echo site_url();?>">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="<?php echo site_url('/ashley-davenport-attorney-at-law');?>">ABOUT</a>
        </li>

        <li class="nav-item dropdown">
           <a class="px-3 nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">SERVICES </a>
          
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo site_url('/services/discrimination');?>">Discrimination</a>
            <a class="dropdown-item" href="<?php echo site_url('/services/harassment');?>">Harassment</a>
            <a class="dropdown-item" href="<?php echo site_url('/services/retaliation');?>">Retaliation</a>
            <a class="dropdown-item" href="<?php echo site_url('services/unlawful-wage-and-hour-practices');?>">Unlawful Wages</a>
          </div>

        </li>

        <li class="nav-item">
          <a class="nav-link px-3" href="<?php echo site_url('/client-results');?>">CLIENT RESULTS</a>
        </li>
      </ul>
    </div>
  </nav>
