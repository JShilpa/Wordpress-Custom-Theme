<h3><?php the_title(); ?></h3>
<div class="thumbnail-img">
   <?php the_post_thumbnail('thumbnail');  ?>
</div>
<!-- We don't want to print category name in list format, to put inverted commas in it. -->
<!-- In order to get the tags, use the_tags() -->
<!-- To edit the post link, use edit_post_link -->

<small>Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in category <?php the_category(''); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
<p>
  <?php the_content();  ?>

  <!-- To put comments at the bottom of the page -->
<?php if(comments_open) { comments_template();} ?>

</p>
<hr>
