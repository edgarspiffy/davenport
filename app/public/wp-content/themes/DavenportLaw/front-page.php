<?php get_header();while(have_posts()){the_post();?>

<!-- HEADER -->
<div class="container-fluid header">
  <div class="overlay">
    <div class="front-page-header-image"></div>
      <div class="container">
        <div class="title"><h1><?php the_title();?></h1></div>
      </div>
  </div>
</div>


<!-- BOX HIGHLIGHTS -->
<div class="container boxes break">
  <div class="row">
    <div class="col-6 col-md-4">
      <div class="box shade">
        <div class="box-content">
          <img src="<?php echo get_theme_file_uri('/images/icons/retaliation-white.png') ?>" alt="">
          <span class='number'>$5.0M</span>
          <p>Jury Verdict in an Employment Retaliation Case</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4">
      <div class="box shade">
        <div class="box-content">
          <img src="<?php echo get_theme_file_uri('/images/icons/clock.png') ?>" alt="">
          <span class='number'>$5.0M</span>
          <p>Settlement for Meal and Rest Break Violations</p>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 d-md-block d-none">
      <div class="box shade">
        <div class="box-content">
          <img src="<?php echo get_theme_file_uri('/images/icons/whistle.png') ?>" alt="">
          <span class='number'>$6.9M</span>
          <p>Settlement in Government Fraud Whistleblower</p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- COPY 1 -->
<div class="container break cop-1">
  <?php echo get_field('copy_section_1'); ?>
</div>

<!-- IMAGE CATEGORY -->
<?php get_template_part('template-parts/category-images');?>


<!-- COPY2 -->
<div class="container break copy-2">
  <div class="row">
    <div class="col-12 col-md-7">
      <?php echo get_field('copy_section_2'); ?>
    </div>
    <div class="col-12 col-md-5">
      <img class='img-fluid shade' src="<?php echo get_theme_file_uri('/images/branding/ashley.jpg'); ?>" alt="">
    </div>
  </div>
</div>





















<?php } get_footer(); ?>