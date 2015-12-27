<?php

//Template name: Post

get_header();

?>
<?php if(have_posts()): ?>


  <?php while(have_posts()): ?>

    <?php the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <small>Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in category <?php the_category(); ?></small>
    <p>
      <?php the_content();  ?>
    </p>
<hr>

<?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>
