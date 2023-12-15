<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ID-id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GIFTIESITI</title>
  
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/fontawesome-free/css/all.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/adminlte.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/toastr/toastr.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/air-datepicker/dist/css/datepicker.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/select2js/dist/css/select2.min.css', 'adminlte'); ?>">

    <link rel="icon" href="<?php echo base_url('assets/uploads/static/icon.png'); ?>" type="image/icon">

    <script src="<?php echo get_theme_uri('plugins/jquery/jquery.min.js', 'adminlte'); ?>"></script>
    <script src="<?php echo get_theme_uri('plugins/bootstrap/js/bootstrap.bundle.min.js', 'adminlte'); ?>"></script>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo site_url('customer'); ?>"><b><b>GIFTIESITI</b></b></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <form class="form-inline ml-3" action="<?php echo site_url('customer/orders/search'); ?>" method="GET">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" value="" name="query" placeholder="Cari order..." aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo site_url('pages/about'); ?>" class="nav-link">About</a></li>
			      <li class="nav-item active"><a href="<?php echo site_url('pages/contact'); ?>" class="nav-link">Customer Care</a></li>
            <li class="nav-item active"><a href="<?php echo site_url('profileuser'); ?>" class="nav-link">Profil</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </body>
</html>