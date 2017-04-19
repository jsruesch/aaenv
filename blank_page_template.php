<?php
/*
 Template Name: Blank Page Template
*/
?>


<?php get_header(); ?>

<div class="container-fluid">
  <div class="container">
    <div class="row bg-lgrey pad60">
      <h2 class="text-navy"><?php the_title(); ?></h2>
      <p class="text-dgrey mar20-top"><?php the_content(); ?></p> 
    </div>
  </div>
</div>



<?php get_footer(); ?>
