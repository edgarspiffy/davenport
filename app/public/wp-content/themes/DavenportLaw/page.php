<?php get_header();while(have_posts()){the_post();?>


<?php 
   $image = get_field('banner_image');
   if($image === null){
     $image = get_theme_file_uri('images/categories/worker-white.jpg');
   } else {
     $image = $image['url'];
   }
  ?> 



<div style="background-image:url('<?php echo $image?>');?>');" class="container-fluid page-header">
</div>

<div class="container-fluid break-half page-title">
  <div class="container">
    <div class="row">
    <div class="col">
      <h1><?php the_title();?></h1>
    </div>
  </div>
  </div>
</div>


<div class="container break">
    <div class="row">
    <div class="col-12 col-md-10">
      <?php the_content();?>
    </div>
    <div class="col-12 col-md-2 side-nav-border">
      <?php  get_template_part('template-parts/side-nav'); ?>
    </div>
  </div>
</div>








<?php } get_footer();?>