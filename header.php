<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */


?>
<!doctype html>


<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php 
		//wp_head();
		global $template_directory; $template_directory  = get_bloginfo('template_directory');
		$home_directory = get_site_url();
	 ?>

	
       
		<title>Shot of Joy</title>
	
  	<link rel="stylesheet" href="<?php echo $template_directory; ?>/style.css?v=1.01199" type="text/css" /> 
	
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>	
	
	
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>

	
	
	
</head>
<body id="page-top">



<div id="wrapper" class="portrait_mode">

<header>
	
	
	
</header>

<nav></nav>
<?php if(!is_page()){ ?>
<a href="http://www.shotofjoy.nl"><img src="<?php echo $template_directory; ?>/img/SOJ-logo.png" id="soj-logo-big"/></a>
<?php } ?>
