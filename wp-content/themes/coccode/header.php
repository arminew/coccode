<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title><?php the_title(); ?></title>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/bootstrap4/bootstrap.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>-->
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">;</script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
