<article <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ): ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail('post-thumbnail'); ?>
    </a>
  <?php endif; ?>
  <div class="content-wrapper">
    <header class="entry-header">
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>
