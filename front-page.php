<?php get_header();  ?>

<div class="content aboutMainMain">

  <div class="main">

    <div class="wrapper">
    <h1 class="h1Works">About</h1>
     <div class="aboutMain"> <?php // Start the loop ?>
       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
           <?php the_content(); ?>
      <?php endwhile; // end the loop?>
        <div class="readmore"><a href="<?php echo get_permalink(24) ?>">Read More</a></div>
        
      </div>
    </div> <!-- /.wrapper -->

  </div> <!-- /.main -->

</div> <!-- /.content -->

<div class="contentGallery">

<?php
  if (is_front_page()) {
?>
  
  <div class="gallery wrapper">
  <h1 class="h1Works">Works</h1>
    <ul>
<?php
  global $post;
  $myposts = get_posts('numberposts=3');
  foreach($myposts as $post) :
    setup_postdata($post); 
?>
  <li>
  <a href="<?php the_permalink(); ?>">
    <img src="<?php echo hackeryou_get_thumbnail_url($post) ?>" alt="">
    <?php the_title(); ?></a>
    <div class="excerpt"><?php  the_excerpt(); ?></div>
  
  </li>
<?php endforeach;
}
?>
</ul>
<div class="readmore"><a href="<?php echo get_permalink(16) ?>">See More</a></div>
</div>

  
</div>


<?php get_footer(); ?>
