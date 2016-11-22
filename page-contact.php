<?php
/*
Template Name: CONTACT PAGE
*/
?>
<?php get_header(); ?>

<section class="section-contact">
  <h1>If you want us to call you</h1>
  <h2>Submit this quick form. All information is kept private.</h2>
  <p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sandra-img.png">Sandra will call you right away.
  </p>
</section>

<div class="section-contact-form">
  <div class="form">
      <form id="contactrequest" action="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/send.php" method="post">
        <p class="error"></p>
        <input type="text" class="name" id="name" name="name" placeholder="Name">
        <input type="text" class="email" id="email" name="email" placeholder="E-mail">
        <input type="text" class="telephone" id="telephone" name="telephone" placeholder="Phone (optional) [xxx-xxx-xxxx]">
        <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
        <p class="center"><input type="button" value="Send request" class="button" onclick="requestSubmit()"><a href="#" class="close"><i class="icon-remove"></i></a></p>
        <input type="hidden" id="company" name="company" value="nearsoft">
      </form>
  </div>
</div>




<?php get_footer(); ?>
