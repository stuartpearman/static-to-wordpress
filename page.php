<?php get_header(); ?>


<main>
  <section>
    <?php if ( have_posts() ) : the_post(); ?>
      <article>
        <div class="container">
          <h1 class="page-header"><?php echo $post->menu_order ?></h1>
        </div>
        <div class="container">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endif; ?>
  </div>
  </section>
</main>

<?php get_footer(); ?>
