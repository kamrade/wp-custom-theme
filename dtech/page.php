<?php

get_header();

?>
<div class="container">

<?php
if( have_posts() ) :
  while( have_posts() ) : the_post(); ?>
    <div class="page-container single-page-container">

      <article class="page single-page">

        <?php if ( has_children() OR $post->post_parent > 0) { ?>
          <nav class="site-sub-nav mb-5">
            <li class="page_item parent-link">
              <a
                href="<?php echo get_the_permalink( get_top_ancestor_id() ); ?>">
                <?php echo get_the_title( get_top_ancestor_id() ); ?></a>
            </li>

            <?php
              $args = array(
                'child_of' => get_top_ancestor_id(),
                'title_li' => ''
              );
            ?>

            <?php wp_list_pages($args); ?>
          </nav>
        <?php } ?>

        <h2 class="single-page__title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>

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
