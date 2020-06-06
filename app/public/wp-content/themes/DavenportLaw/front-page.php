<?php get_header();while(have_posts()){the_post();?>



 <div  class='container-fluid background p-0 my-header'>
   <div class='overlay'>
    <div class="container">
      <div style='min-height:50vh;'class="row align-items-center">
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
</div> 









<div class="container-fluid background-2 px-0  number-round">
  <div class="overlay">
    <div class="container-fluid">
      <div class='text-center'>
        <h2 class='my-italic text-white py-3'>Client Results</h2>
      </div>
      <div class="row text-center">
        <div class="col-12 col-md-4">
          
          <h3 class='d-inline-block'><img src="<?php echo get_theme_file_uri('/images/icons/retaliation-white.png');?>" alt=""><br>$5.0M</h3>
          <p class='my-italic'>Jury Verdict in an Employment Retaliation Case</p>
        </div>
        <div class="col-12 col-md-4 number-round">
          <h3 class='d-inline-block'><img src="<?php echo get_theme_file_uri('/images/icons/clock-white.png');?>" alt=""><br>$5.0M</h3>
          <p class='my-italic'>Settlement for Meal and Rest Break Violations</p>
        </div>
        <div class="col-12 col-md-4 number-round">
          <h3 class='d-inline-block'><img src="<?php echo get_theme_file_uri('/images/icons/whistle-white.png');?>" alt=""><br>$6.9M</h3>
          <p class='my-italic'>Settlement in Government Fraud Whistleblower</p>
        </div>
      </div>
    </div>
  </div>
</div>







  <div class="container-fluid my-bg-gray-2">
    <div class="container">
      <div style='min-height:50vh' class="row align-items-center py-5">
        <div class="col-md-12">
          <?php the_content();?>
        </div>
      </div>
    </div>
  </div>

<!-- <?php  get_template_part('template-parts/testimonials'); ?> -->









  <div class="container-fluid text-center img-copy my-bg-primary">
    <div class="row">

        <div class="col-md-4 bg-image bg-image-left p-0">
          <div class="overlay">
            <div style='height:500px;' class="row align-items-center ">
              <div class="col p-0">
                 <h3 class='py-1'>Harassment</h3>
              </div>
            </div>
          </div>
        </div>
    
      <div class="col-md-4 bg-image bg-image-center p-0">
        <div class="overlay">
          <div style='height:500px;' class="row align-items-center">
            <div class="col p-0">
              <h3 class='py-1'>Retaliation</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 bg-image bg-image-right p-0">
        <div class="overlay">
          <div style='height:500px;' class="row align-items-center ">
            <div class="col p-0">
              <h3 class='py-1'>Unlawful Wages</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 bg-image bg-image-worker-left p-0">
        <div class="overlay">
          <div style='height:500px;' class="row align-items-center ">
            <div class="col p-0">
              <h3 class='py-1'>Unlawful Wages</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 bg-image bg-image-worker-center p-0">
        <div class="overlay">
          <div style='height:500px;' class="row align-items-center r">
            <div class="col p-0">
              <h3 class='py-1'>Unlawful Wages</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 bg-image bg-image-worker-right p-0">
        <div class="overlay">
          <div style='height:500px;' class="row align-items-center ">
            <div class="col p-0">
              <h3 class='py-1'>Unlawful Wages</h3>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



<?php } get_footer();?>
