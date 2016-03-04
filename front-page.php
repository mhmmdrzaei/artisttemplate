<?php get_header();  ?>

<div class="content aboutMainMain">

  <div class="main">

    <div class="wrapper">
     <div class="aboutMain"> <?php // Start the loop ?>
       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
      <?php endwhile; // end the loop?>
        <div class="readmore"><a href="<?php echo get_permalink(24) ?>">Read More</a></div>
        
      </div>
    </div> <!-- /.wrapper -->

  </div> <!-- /.main -->

</div> <!-- /.content -->
<div class="content">
<?php
  if (is_front_page()) {
?>
  <h1>Works</h1>
  <div class="gallery">
    <ul>
<?php
  global $post;
  $myposts = get_posts('numberposts=3');
  foreach($myposts as $post) :
    setup_postdata($post); 
?>
  <li>
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail() ?>
    <?php the_title(); ?>
  </a>
  </li>
<?php endforeach;
}
?>
</ul>
<div class="readmore"><a href="<?php echo get_permalink(24) ?>">Read More</a></div>
</div>

  
</div>


<?php get_footer(); ?>