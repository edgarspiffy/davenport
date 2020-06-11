<?php get_header();while(have_posts()){the_post();?>


<!-- <div  class='container-fluid'>
  <div class="">
    <div style='background-color:blue;min-height:20vh;'class="row align-items-center">
      <div class="col-md-2"></div>
      <div class="col-md-10">
        <div style='min-height:20vh;' class="row align-items-center">
                <h1 class='pt-3'><?php the_title();?></h1>
        </div>

        <img src="" alt="">
      </div>
    </div>
  </div>
</div> -->




<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-10">
      <h1 class='pt-3' style='border-bottom:2px solid black'><?php the_title(); ?></h1>
    </div>
  </div>
</div>


<div class="container-fluid">
  .
  <div class="row">
    <div class="col-md-2 order-2 order-md-1">
      <?php  get_template_part('template-parts/side-nav'); ?>
    </div>
    <div class="col-md-8 order-1  order-md-2">
    
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php } get_footer();?>