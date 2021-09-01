<?php get_header(); ?>
  <section class="py-8">
    <div class="container lg:max-w-screen-lg mx-auto">
      <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-9">
          <?php get_template_part('partials/post-full');?>
        </div>
        <div class="col-span-12 lg:col-span-3">
          <?php get_sidebar('sf_blog_sidebar'); ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>