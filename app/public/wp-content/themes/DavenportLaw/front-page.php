<?php get_header();while(have_posts()){the_post();?>



<div  class='container-fluid'>
  <div class="container">
    <div style='min-height:60vh;'class="row align-items-center">
      <div class="col">
        <h1 class='text-md-left'>Employment Lawyer Protecting the Rights of Employees in Los Angeles and throughout California</h1>
        <p class='d-none d-md-block'>California law provides strong protections that prohibit misconduct in the workplace, but
        California employees are subjected to unlawful discrimination, retaliation and harassment at
        work far too often. Employers frequeently fail to comply with California laws relating to meal
        breaks, rest breaks, payment for all hours worked and expense reimbursements. Terminated
        employees are often offered severance agreements, which should always be reviewed with an
        attorney to ensure employee rights are protected, but rarely are.</p>
        <div class='text-center text-md-left'>
          <a class='btn btn-lg d-block d-md-inline-block my-3 my-btn' href="">REQUEST CONSULTATION</a>
        </div>
      </div>
    </div>
  </div>
</div>



<?php  get_template_part('template-parts/numbers-template'); ?>



  <div class="container-fluid" style="background-color:#E5E8EE;">
    <div style='min-height:50vh' class="row align-items-center py-5">

      <div class="col-md-3 text-center my-quote ">
        <p class='p-2 d-none d-md-block'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, cumque!</p>
      </div>

      <div class="col-md-9">
        <?php the_content();?>
      </div>
    </div>
  </div>







<div>
  <h3 class='my-italic victim text-center text-md-left'>I've been a victim of...</h3>
</div>
  <div class="container-fluid text-center img-copy">
    <div class="row">
  
      <div class="col-md-4">
        <div class="overlay">
        <div style='height:500px;' class="row align-items-center bg-image">
        
          <div class="col">
            <h3>Harassment</h3>
          </div>
  
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div style='height:500px;' class="row align-items-center bg-image2">
          <div class="col">
            <h3>Retaliation</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div style='height:500px;' class="row align-items-center bg-image3">
          <div class="col">
            <h3>Unlawful Wages</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- 
<div class="container-fluid p-0">
  <div class="row">
    <div class="col-6 p-0">
      <img class='img-fluid' src="<?php echo get_theme_file_uri('images/sky1.png'); ?>" alt="">
    </div>
    <div class="col-6 p-0">
      <img class='img-fluid' src="<?php echo get_theme_file_uri('images/test2.png'); ?>" alt="">
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <img class='img-fluid' src="<?php echo get_theme_file_uri('images/selfie.jpg');?>" alt="">
    </div>
    <div class="col-md-6"></div>
  </div>
</div> -->



<?php  get_template_part('template-parts/contact-template'); ?>

<?php } get_footer();?>
