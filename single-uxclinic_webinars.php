<?php get_header('banner'); ?>

<div class="blog-background">
<div class="post-card">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if( get_field('webinar_toggle') )
    {
      echo "<div style='display:none;'>";
    }
    else
    {
      echo "<div>";
    }
?>

<!-- Before Webinar blocks -->
<section class="workshop-hero" style="background-image: url(<?php the_field('webinar_background_image') ?>)!important;">
  <div class="uxworkshop-label">UX WORKSHOP</div>
  <h1><?php the_field('webinar_title'); ?></h1>
  <a href="#int-des" class="button green">Save your spot!</a>
  <div class="date"><span>Date: </span><?php the_field('webinar_date'); ?><span>Online Webinar</div>
</section>


<section class="e-can uxcontent">
  <h2>IMPROVE YOUR SOFTWARE PRODUCT</h2>
  
  <p><?php the_field('webinar_full_description'); ?></p>
</section>


<section class=" e-can experts">
  <h2>Speakers</h2>
<div class="ux-expert-card">
    <div class="ux-expert-card-picture">
      <img src="http://ux.nearsoft.com/wp/wp-content/themes/ux/img/ux-researcher-diana-arvayo.png" />
    </div>
      <div class="content-container">
        <h3>Diana Arvayo</h3>
        <h4>UX Researcher</h4>
        <p>Diana is an expert designing research-based experiences and solutions, bringing to life what users expect and service providers need. She has experience testing products with users in many environments.</p>
        <div class="social-box">
          <a href="https://www.linkedin.com/in/darvayo" target="_blank"><div class="social-link linkedin"></div></a>
          <a href="https://twitter.com/dianonina" target="_blank"><div class="social-link twitter"></div></a>
        </div>
      </div>
  </div>

 <div class="ux-expert-card">
  <div class="ux-expert-card-picture">
    <img src="http://ux.nearsoft.com/wp/wp-content/themes/ux/img/mtye.png" />
  </div>
    <div class="content-container">
      <h3>Monica Tye</h3>
      <h4>Product Manager</h4>
      <p>Monica has been responsible of the development of several software products in our Nearsoft Labs initiative. She has first hand experience of the importance of User Testing in Product Development.</p>
      <div class="social-box">
        <a href="https://www.linkedin.com/in/monicatye" target="_blank"><div class="social-link linkedin"></div></a>
      </div>
    </div>
  </div>

</section>


<div class="remodal" data-remodal-id="int-des" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <div class="minilogo"></div>
  
  <h2>Join our UX Team next Dec 8, to learn hot to Validate Your Product with Usability Testing.</h2>
  
<!-- Begin MailChimp Signup Form -->
<div class="form-center">
<?php echo do_shortcode( '[easy_sign_up phone="0" fnln="0"]' ); ?>
</div>

<!--End mc_embed_signup-->

</div>

</div>

<!-- past format ends here -->


<!-- Toggles the new format info -->

<?php if( get_field('webinar_toggle') )
    {
      echo "<div>";
    }
    else
    {
      echo "<div style='display:none;'>";
    }
?>
  
  <section class="ncs-hero" style="background: url(http://ux.nearsoft.com/wp/wp-content/uploads/2015/06/Screen-Shot-2016-01-18-at-9.43.52-AM.png) no-repeat center center; background-size: cover;">
    <h1><?php the_field('webinar_title'); ?></h1>
    <h3><?php the_field('webinar_description'); ?></h3>
  </section>

  <section class='casestudy-video-hero2'>
    <h2 class="video-h3-title2">Watch Our Webinar</h2>
    <div class="video-wrapper">
      <?php the_field('webinar_embed_code'); ?>
    </div>
    <p>
      <?php the_field('webinar_video_sidetext'); ?>
    </p>

  </section>
  
  <section class="report-download">
    <a class="button report-button green" Target="_blank" href="<?php the_field('webinar_slides_url'); ?>">Download Slidedeck</a>
  </section>

</div>
  
  <!-- Case studies new format ends here -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/remodal.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/remodal.js"></script>

<!-- Events -->
<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });
  
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>

<?php endwhile; ?><?php endif; ?>

</div>
</div>

<div class="share-left">
  <a target="_blank" class="facebook" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink(); ?>&p[images][0]=<?php the_post_thumbnail_url(); ?>&p[title]=<?php the_title(); ?>&p[summary]=<?php the_excerpt(); ?>"></a>
  
  <a target="_blank" class="twitter" href="https://twitter.com/intent/tweet?url=https://goo.gl/y8wyUt&text=<?php the_title(); ?>. Save your spot!&hashtags=NearsoftUXWebinar"></a>

  
  
  <a target="_blank" class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&summary=<?php the_excerpt(); ?>&source=LinkedIn"></a>
  
  <a target="_blank" class="google" href="https://plus.google.com/share?url={<?php the_permalink(); ?>}"></a>

</div>

<?php get_footer(); ?>
