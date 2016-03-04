<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
    <img src="<?php bloginfo('template_directory') ?>'/images/hero.jpg" alt="">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php 
        $title = get_the_title();
        echo $title;
         ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>