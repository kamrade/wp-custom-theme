<?php

/*
Template Name: Special Layout
*/

get_header();

?>
<div class="container">

<?php
if( have_posts() ) :
  while( have_posts() ) : the_post(); ?>
    <div class="page-container single-page-container">
      <div class="row">

        <div class="col-md-9">
          <article class="page single-page">
            <h2 class="single-page__title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </article>
        </div>

        <div class="col-md-3">
          <div class="info-box"></div>
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
