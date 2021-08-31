<article>
  <h1 class="text-xl"><a href="<?php echo esc_url(get_the_permalink());?>"><?php the_title();?></a></h1>
  <h2 class="text-sm mb-4">Written <?php the_date();?> by <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ));?>"><?php echo ucfirst(get_the_author());?></a></h2>
  <p class="text-sm"><?php echo get_the_excerpt();?></p>
</article>