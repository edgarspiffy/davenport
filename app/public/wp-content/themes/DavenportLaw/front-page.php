<?php get_header();while(have_posts()){the_post();?>



<div  class='container-fluid background p-0 my-header'>
  <div class='overlay'>
    <div class="container">
      <div style='min-height:45vh;'class="row align-items-center">
        <div class="col">
      
          <h1 class='text-md-left'><?php the_title(); ?></h1>
          
          <div class='text-center text-md-left'>
            <!-- <a class='btn btn-lg d-block d-md-inline-block my-3 my-btn' href="">REQUEST CONSULTATION</a> -->
          </div>

        </div>
      </div>
    </div>


<?php  get_template_part('template-parts/circles'); ?>

  </div>
</div> 







<!-- 
<div class="container-fluid background-2 px-0  number-round">
  <div class="overlay">
    <div style='min-height:30vh;' class="container">

      <div class='text-center pt-1'>
        <h2 class='my-italic text-white py-3'>Client Results</h2>
      </div>

      <div class="row text-center pb-2">
        <div class="col-12 col-md-4">
          <div class="circle d-inline-block">
            <img class='mx-auto d-inline-block'src="<?php echo get_theme_file_uri('/images/icons/retaliation-white.png');?>" alt="">
            <br>
            <h3 class='d-inline-block'>$5.0M</h3>
          </div>
          <p class='my-italic'>Jury Verdict in an Employment Retaliation Case</p>
        </div>

        <div class="col-12 col-md-4">
          <div class="circle d-inline-block">
            <img class='mx-auto d-inline-block'src="<?php echo get_theme_file_uri('/images/icons/clock.png');?>" alt="">
            <br>
            <h3 class='d-inline-block'>$5.0M</h3>
          </div>
          <p class='my-italic'>Settlement for Meal and Rest Break Violations</p>
        </div>

        <div class="col-12 col-md-4">
          <div class="circle d-inline-block">
            <img class='mx-auto d-inline-block'src="<?php echo get_theme_file_uri('/images/icons/whistle.png');?>" alt="">
            <br>
            <h3 class='d-inline-block'>$6.9M</h3>
          </div>
          <p class='my-italic'>Settlement in Government Fraud Whistleblower</p>
        </div>
      </div>

    </div>
  </div>
</div>
 -->

 

<div class="container-fluid my-bg-gray-2">
  <div class="container py-5">
    <p><?php echo get_field('banner_text');?></p>
  </div>
</div>





 


<?php  get_template_part('template-parts/image-block'); ?>













<!-- 
 <div class="container-fluid my-bg-gray-2">
    <div class="">
      
    
      <div class="row align-items-center py-5">

        <div class="col-md-4">
          <img class='img-fluid d-block mx-auto' src="<?php echo get_theme_file_uri('/images/branding/ashley.jpg');?>" alt="">
        </div>

        <div class="col-md-8">
          <?php the_content();?>
        </div>


        
      </div>
    </div>
  </div> -->

<?php } get_footer();?>