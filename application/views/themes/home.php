<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('img/slide1.jpg'); ?>);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-2">Welcome to giftiesiti</h1>
            <h2 class="subheading mb-4">Dapatkan Hadiah Menarikmu DiSini</h2>
            <p><a href="<?php echo site_url('auth/login'); ?>" class="btn btn-primary">LOGIN</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('img/slide3.jpg'); ?>);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-sm-12 ftco-animate text-center">
            <h1 class="mb-2">Welcome to giftiesiti</h1>
            <h2 class="subheading mb-4">Dapatkan Hadiah Menarikmu DiSini</h2>
            <p><a href="<?php echo site_url('auth/login'); ?>" class="btn btn-primary">LOGIN</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>