<?php get_header(); ?>
<!-- In home page, if you want to print latest post first, we need to edit query_post with wp_query -->
<div class="row">

	<div class="col-xs-12 col-sm-8">
<?php
$args= array(
  'type'=> 'post',
  'posts_per_page' =>1


);
  $lastpost=new WP_Query($args);

 ?>

 <?php if(  $lastpost->have_posts()): ?>


   <?php while(  $lastpost->have_posts()): ?>
 <?php   $lastpost->the_post(); ?>
 <!-- This function gives us applied format of the post. -->
 <?php //echo ('the post format '.get_post_format()); ?>

 <!-- We can call different template based on our format type.All we have to do is put content- prefix in front of format name filename.
 ex. if format name is image, template filename would be content-image. If format type is standard, file name would be content.php.The content can be any word. -->

 <?php get_template_part('content', get_post_format()); ?>
 <?php endwhile; ?>
 <?php endif;  wp_reset_postdata();?>

<div class="row">
<!-- Printing next two latest post.To exckude above one, set offset=1 -->

  <?php
  $args= array(
    'type'=> 'post',
    'posts_per_page' =>2,
    'offset' => 1,



  );
    $lastpost=new WP_Query($args);

   ?>

   <?php if(  $lastpost->have_posts()): ?>


     <?php while(  $lastpost->have_posts()): ?>
   <?php   $lastpost->the_post(); ?>




   <?php get_template_part('content', get_post_format()); ?>
   <?php endwhile; ?>
   <?php endif; wp_reset_postdata(); ?>

</div>


<div class="row">
<!-- Printing next two latest post.To exckude above one, set offset=1 -->

  <?php
  $args= array(
    'type'=> 'post',
    'posts_per_page' =>-1,
    'category_name' => 'secondcat',




  );
    $lastpost=new WP_Query($args);

   ?>

   <?php if(  $lastpost->have_posts()): ?>


     <?php while(  $lastpost->have_posts()): ?>
   <?php   $lastpost->the_post(); ?>




   <?php get_template_part('content', get_post_format()); ?>
   <?php endwhile; ?>
   <?php endif; wp_reset_postdata(); ?>

</div>

</div>

<div class="col-xs-12 col-sm-4">
  <!-- calls dynamic sidebar from sidebar.php -->
  <?php get_sidebar(); ?>
</div>

</div>


<?php get_footer(); ?>
