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
       
       <?php global $post; setup_postdata($post); ?>
       
	<title><?php echo get_the_title(); ?></title>
	<?php //wp_head(); ?>
  	 <link rel="icon" href="<?php echo $template_directory; ?>/img/favicon.ico" type="image/x-icon" /> 
    <link rel="shortcut icon" href="<?php echo $template_directory; ?>/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="http://www.shotofjoy.nl/AppIcon76x76.png"/>
	<link rel="apple-touch-icon-precomposed" href="http://www.shotofjoy.nl/AppIcon72x72@2x.png"/>
	<link rel="apple-touch-startup-image" href="http://www.shotofjoy.nl/AppIcon76x76.png"/>
	<link rel="apple-touch-icon-precomposed" href="icon" />

  	
  	 <?php if (is_home()):  ?>
        <meta name="description" content="" />
         <meta property="og:description" content="<?php the_excerpt_rss(); ?>" />
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), full );
        if ( has_post_thumbnail() ) { ?>
            <meta property="og:image" content="<?php echo $src[0]; ?>" />
            <link rel="image_src" href="<?php echo $src[0]; ?>" />
        <?php } else { ?>
            <link rel="image_src" href="<?php echo $template_directory; ?>/img/SOJ-logo-zw.png" />
            <meta property="og:image" content="<?php echo $template_directory; ?>/img/SOJ-logo-zw.png" />
        <?php } ?>
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.shotofjoy.nl" />
        <meta property="og:title" content="<?php wp_title("", true); ?>" />
    <?php else: ?>
         <meta property="og:description" content="" />
        <meta property="og:image" content="<?php echo $template_directory; ?>/img/SOJ-logo-zw.png" />
        <link rel="image_src" href="<?php echo $template_directory; ?>/img/SOJ-logo-zw.png" />
        <meta property="og:url" content="http://www.shotofjoy.nl" />
        <meta property="og:title" content="ShotofJoy.nl" />
        <meta property="og:type" content="website" />
    <?php endif; ?>
    <meta name="robots" content="index, follow">
  	

  	<link rel="stylesheet" href="<?php echo $template_directory; ?>/style.css?v=1.01215" type="text/css" /> 

	<link href='//fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>	
	<script src="<?php echo get_bloginfo('template_directory'); ?>/js/plugins.js"></script>
	
	
	
	<script>
	
	
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12257116-31', 'shotofjoy.nl');
  ga('send', 'pageview');


</script>
</head>
<body id="page-top" <?php if (is_page()) { ?>class="page"<?php } ?>>



<div id="wrapper" class="portrait_mode">

<header>
	

	
</header>

<div class="rotate-box">
	
	<img src="<?php echo $template_directory; ?>/img/DRAAI-SCHERM.png" />
	
	
</div>


<?php
	if ( is_user_logged_in() ) {
		echo '<a href="http://www.shotofjoy.nl/account-overzicht/" class="nav-posts icon-user">&nbsp;</a>';
	}
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
<a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo $template_directory; ?>/img/<?php echo $logo_img;?>.svg"  nopin="nopin" id="soj-logo-big"/></a>
<?php } ?>
