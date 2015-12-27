<!-- to get header, call get_header function of wordpress -->
<?php get_header(); ?>
<div class="row">

	<div class="col-xs-12 col-sm-8">
<?php if(have_posts()): ?>


  <?php while(have_posts()): ?>
<?php the_post(); ?>
<!-- This function gives us applied format of the post. -->
<?php //echo ('the post format '.get_post_format()); ?>

<!-- We can call different template based on our format type.All we have to do is put content- prefix in front of format name filename.
ex. if format name is image, template filename would be content-image. If format type is standard, file name would be content.php.The content can be any word. -->

<?php get_template_part('content', get_post_format()); ?>
<?php endwhile; ?>
<?php endif; ?>

</div>

<div class="col-xs-12 col-sm-4">
  <!-- calls dynamic sidebar from sidebar.php -->
  <?php get_sidebar(); ?>
</div>

</div>


<?php get_footer(); ?>
