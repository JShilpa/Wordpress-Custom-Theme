<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- to include all hooks and filters from function.php, use wp_head. It connects wordpress to function.php -->
    <?php wp_head(); ?>
  </head>
  <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
  <!-- to have different classes on body .
      If we want to explicitly specify class names put them in an array  like body_class(array('classname1,classname2')).-->

<!-- To include specific class in front page, use defualt wp function, is_front_page() -->
      <?php if ( is_front_page() )
      {
        $classname=array('home1', 'home2');
      }

      else
      {
        $classname=array();
      }


      ?>

  <body <?php body_class($classname);?> >
