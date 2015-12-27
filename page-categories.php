<?php

//Template name: Categories

get_header();

?>

<?php

$categories=get_the_category (array('include' => '1,6,7'));
var_dump($categories);

 ?>

 <?php foreach ($categories as $category): ?>
<div class="container">

<div class="row">
  <div class="col-md-4">
    <h4><?php echo $category->name; ?></h4>
    <p>
      <?php  ?>
    </p>
  </div>
  <!-- <div class="col-md-4">
    <h4></h4>
    <p>
      b
    </p>
  </div>
  <div class="col-md-4">
<h4></h4>
<p>
  b
</p>
  </div> -->


  </div>

</div>
<?php endforeach; ?>
