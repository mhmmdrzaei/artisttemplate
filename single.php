<?php get_header(); ?>

<div class="main">
  <div class="wrapper">
  
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
         

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>