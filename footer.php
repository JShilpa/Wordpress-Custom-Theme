<footer>
  <!-- custom menu at the footer. -->
  <?php wp_nav_menu(array('theme_location'=>'footer_secondary_menu')); ?>
This is my footer text.
</footer>
<!--to include custom javascript file from function.php.In wp_enque_script, last parameter is true which signifies footer to be present at the bottom -->
<?php wp_footer(); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
