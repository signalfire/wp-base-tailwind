<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part('partials/post');?>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
