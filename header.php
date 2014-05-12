<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */


?>
<!doctype html>


<html lang="nl">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php 
		//wp_head();
		global $template_directory; $template_directory  = get_bloginfo('template_directory');
		$home_directory = get_site_url();
	 ?>
       
	<title>Shot of Joy</title>
	<?php //wp_head(); ?>
  	<link rel="stylesheet" href="<?php echo $template_directory; ?>/style.css?v=1.01199" type="text/css" /> 
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>	
	<script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
	
	
<<<<<<< HEAD
=======
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12257116-31', 'shotofjoy.nl');
  ga('send', 'pageview');
>>>>>>> FETCH_HEAD

</script>
</head>
<body id="page-top">



<div id="wrapper" class="portrait_mode">

<header>
	
	
	
</header>

<?php
echo '<a href="https://www.shotofjoy.nl/account/" class="nav-posts icon-list">&nbsp;</a>';
?>

<nav></nav>
<?php
if(!is_page()){ 

// Show Black or white logo
$post_id = get_the_id();
$logo_color = get_field('logo_color', $post_id);
if (!empty($logo_color) ){

	if ($logo_color == 'Black'){
		$logo_img = 'SOJ-logo-zwart';
	} else {
		$logo_img = 'SOJ-logo-wit';
	}
	
} else {
	$logo_img = 'SOJ-logo-wit';
}
?>
<a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo $template_directory; ?>/img/<?php echo $logo_img;?>.svg" id="soj-logo-big"/></a>
<?php } ?>
