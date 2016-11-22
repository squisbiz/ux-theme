<?php
/*
Template Name: HOME
*/
?>
<?php get_header(); ?>

<section class="post-full hero">
  <h1>Power Up Your Product with UX</h1>
  <span class="tagline">Build a great product that people Love.</span>
  <a class="next-arrow" href="#next"></a>
</section>

<section class="post-full centered-title">
  <div id="next"></div>
  <h2>We Engage with Your Users to Boost Your Product</h2>
<!--   <p>Here’s how we engage with your users to boost your product</p> -->
  
  <div class="trio" style="margin-top: 3rem;">
    <a href="http://ux.nearsoft.com/user-research-is-key-to-understand-your-audience/" class="aproach-single">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-home01.png" /> 
      <h3>User Centered Research</h3>
      <p>We listen to your users to understand their needs and wants.</p>
      <span>Learn More</span>
    </a>
    
   <a href="http://ux.nearsoft.com/finding-patterns-through-data-analysis/" class="aproach-single">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-home02.png" />
      <h3>Analysis & Interpretation</h3>
      <p>We translate user insights into design solutions for you.</p>
      <span>Learn More</span>
    </a>
    
    <a href="http://ux.nearsoft.com/ui-design-must-reflect-the-ux-solution/" class="aproach-single">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-home03.png" /> 
      <h3>UI Solutions</h3>
      <p>We create visual solutions for you, ready for implementation.</p>
      <span>Learn More</span>
    </a>
    
  </div>
</section>

<section class="post-full middle">
  <h3>We help you move forward by providing the data to power up your product.</h3>
</section>

<section class="post-full left-title">
  <h2>Our Clients</h2>
  <p>These are some of the products we’ve powered up</p>
  <a class="button arrow-button" href="<?php home_url(); ?>/portfolio">Go to our portfolio</a>
  <div class="clear"></div>
  
  <div class="dual">
    <div class="single-case cogia-home">
      <div class="single-case-image"></div>
      <div class="overlay">
        <a href="http://ux.nearsoft.com/portfolio/#cogia-home">
          <h3>The Challenge</h3>
          <p class="challenge">Restructure information and layout according to user expectation.</p>
          <span class="fake-link">Learn More</span>
        </a>
      </div>
      <div class="single-case-title"><h3>Cogia Intelligence</h3><p>A web based app to monitor website and social media.</div>
    </div>
    
    <div class="single-case shopwell-home">
      <div class="single-case-image"></div>
      <div class="overlay">
        <a href="http://ux.nearsoft.com/portfolio/#shopwell-home">
          <h3>The Challenge</h3>
          <p class="challenge">Increase User Engagement and Retention.</p>\
          <span class="fake-link">Learn More</span>
        </a>
      </div>
      <div class="single-case-title"><h3>Shopwell</h3><p>Healthy eating made simple with a free personal nutrition expert in your pocket.</div>
    </div>
  </div>
</section>

<section class="post-full left-title testimonials">
  <div class="float-left">
    <h2>Our Clients Love Our Work</h2>
    <p>And what they are saying about our work.</p>
  </div>
  
  <div class="float-right">
      <ul class="bxslide">
        <li>
          <div class="quote">
          The UX team was so helpful for us because a lot of times you need a fresh, 3rd party eyes to really get valuable feedback. It's very easy to get too used to your UX and start making bad decisions based on your own feelings.
          </div>
          
          <div class="quote_author">
            <div class="quote-pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/andrew-pic.jpg" /></div>
            
            <h4>Andrew Miller<span> Marketing Director of Olset.</span></h4><br>
            <a href="http://www.olset.com/" target="_blank">http://www.olset.com/</a>
          </div>
          
          
          
        </li>
        
        
        <li>
          <div class="quote">
          It is very easy to get too used to your own UX and UI. You start making bad decisions based on your own feelings. Working with the UX Team was extremely useful to get objective feedback on our product.
          </div>
          
          <div class="quote_author">
            <div class="quote-pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dustin-pic.jpg" /></div>
            <h4>Dustin Yoder<span> CEO at Sureify.</span></h4><br>
            <a href="http://www.sureify.com/" target="_blank">http://www.sureify.com/</a>
          </div>
        </li>
      </ul> 
      
      <script>
      $(document).ready(function(){
        $('.bxslide').bxSlider({
          mode: 'fade',
          auto: true,
          infiniteLoop: true,
          speed: 500,
          randomStart: true,
          autoStart: true,
          pager: false,
          pause: 6000
        });
      });
      </script>
  
   
  </div>
  
</section>

<?php include 'inc-contact.php'; ?>

<section class="post-full left-title">
  <h2>The UX Team Blog</h2>
  <p>A resource for you to learn more about UX, including our own findings,<br>and hints of where the UX world is going. Take a peek!</p>
  <a class="button arrow-button" href="<?php home_url(); ?>/blog">Go to our blog</a>
  <div class="clear"></div>
  
  <div class="trio">
  <?php $the_query = new WP_Query( 'posts_per_page=3&category__not_in=15' ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		
		<div class="post-card post-card--medium post-card--fullbleed">
      <div class="postreel-image" style="background-image: url( <?php the_post_thumbnail_url( $size ); ?> ); background-size: cover; width: 100%; height: 210px;"></div>
			<div class="post-card__content">
  			<a href="<?php the_permalink(); ?>" class="link-cover">
				  <h6 class="post-card__title"><?php the_title(); ?></h6>
  			</a>
			</div>
			
			<div class="post-card__details">
    		<p><?php the_field('mini_excerpt'); ?></p>
    		<a href="<?php the_permalink(); ?>">Read More</a>
  		</div>
		</div>

	<?php endwhile; wp_reset_postdata(); ?>
	<?php wp_reset_query(); ?>
	</div>
</section>

<script>
  
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

</script>

<?php get_footer(); ?>