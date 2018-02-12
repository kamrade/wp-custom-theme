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

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>
