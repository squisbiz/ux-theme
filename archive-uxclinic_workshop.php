<?php get_header(); ?>

<div class="blog-background">
<div class="post-card">

<div class="wa-hero">
	<h1>Create Products in an Innovative Way</h1>
	<p>User Experience Workshops for Your Organization</p>
</div>

<section class="wa-blank">
  <h2>What's in the Bag?</h2>
  <p>Our workshops started out as an in-company initiative. The goal was to train each of our teams in User Experience methodologies and principles.</p></br>
  <p><b>Amazing things happened,</b></p>
  <ul>
    <li>Internal processes were improved and new ones were created</li>
    <li>Team embraced the testing of ideas during early stages of development</li>
  </ul>
</section>

<section class="wa-posts">
  
  <h2>Find Out Which Workshop Is Best For You</h2>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="wa-single">
		<a href="<?php the_permalink(); ?>">
			<img src="<?php the_field('w-archive-image'); ?>" />
			<h2><?php the_title(); ?></h2>
	    <?php the_field('w-description'); ?>
	    <b>Learn More >></b>
		</a>

	</div><!-- single -->	

<?php endwhile; endif; ?>

</section>

<section class="wa-blank">
  <h2>These workshops will help you,</h2>
  
  <div class="w-icons">
    <div class="w-icon">
      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/icon02.png" />
      <h3>Solve problems from a different approach.</h3>
    </div>
    
    <div class="w-icon">
      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/icon01.png" />
      <h3>Work collaboratively toward a common goal</h3>
    </div>
    
    <div class="w-icon">
      <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/icon03.png" />
      <h3>Prevent error by identifying assumptions early</h3>
    </div>
  </div>
</section>

</div>
</div>

<?php include 'inc-contact.php'; ?>

<?php get_footer(); ?>
