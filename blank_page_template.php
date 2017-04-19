<?php
/*
 Template Name: Blank Page Template
*/
?>


<?php get_header(); ?>

<div class="container-fluid">
  <div class="container">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  			<div class="post" id="post-<?php the_ID(); ?>">

  				<div class="row bg-lgrey pad60">

            <h2 class="text-navy"><?php the_title(); ?></h2>
            <p class="text-dgrey mar20-top"><?php the_content(); ?></p>

  				</div>

  				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
  			</div>
  			<?php endwhile; endif; ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
