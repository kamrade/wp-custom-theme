<?php

get_header();

?>
<div class="container">

<?php
if( have_posts() ) :
  while( have_posts() ) : the_post(); ?>
    <div class="page-container single-page-container">
      <div class="row">
        <div class="col-md-3">
          <p class="text-muted">About page use it's personal layout</p>
        </div>
        <div class="col-md-9">
          <article class="page single-page">
            <?php the_content(); ?>
          </article>
        </div>
      </div>
    </div>
  <?php endwhile;
  else :
    echo '<p>No content found</p>';

  endif;
?>

</div>

<?php
get_footer();

?>
