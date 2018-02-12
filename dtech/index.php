<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-9">

      <?php
        if( have_posts() ) :
          while( have_posts() ) : the_post();
            get_template_part('content', get_post_format());
          endwhile;
        else :
          echo '<p>No content found</p>';
        endif;
      ?>

    </div>
    <div class="col-md-3">
      <?php dynamic_sidebar('sidebar1'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
