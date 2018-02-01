<div class="post-container">
  <article class="post <?php if ( has_post_thumbnail() )  { ?> has-thumbnail <?php } ?>">
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <p class="post-info">
      <span class="post-info__date"><?php the_time('F jS, Y'); ?></span>
      <span class="post-info__separator"> | </span>
      <span class="post-info__time"><?php the_time('h:i'); ?></span>
      <span class="post-info__separator"> | by </span>

      <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
        <span class="post-info__author"><?php the_author(); ?></span>
      </a>
      <span class="post-info__separator"> | posted in </span>
      <span class="post-info__categories"><?php
        $categories = get_the_category();
        $separator  = ", ";
        $output     = "";

        if ($categories) {
          foreach ($categories as $category) {
            $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
          }
        }

        echo trim($output, $separator);

      ?></span>

    </p>

    <?php if (has_post_thumbnail()) { ?>
      <div class="featured-image__container">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('small-thumbnail'); ?>
        </a>
      </div>
    <?php } ?>

    <!-- EXCERPT -->
    <?php if (is_search() OR is_archive() ) {
      the_excerpt();
    } else {
      if ($post->post_excerpt) {
        the_excerpt();
      } else {
        the_excerpt();
      }
    } ?>
    <!-- /EXCERPT -->

  </article>
</div>
