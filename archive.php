<?php /* Template Name: Archive */









get_header(); 

$cat = get_category( get_query_var( 'cat' ) );
$cat_id = $cat->cat_ID;
$cat_name = $cat->name;
$cat_slug = $cat->slug;



?>


<div class="calendar-page">
	
	
	
	<div class="header">
		
		<?php if($cat_name == 'beauty') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/beauty.jpg" class="collage" />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/beauty.jpg" class=""/></div>
		<?php } ?>
		<?php if($cat_name == 'food') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/food.jpg" class="collage" />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/food.jpg" class=""/></div>
		<?php } ?>
		<?php if($cat_name == 'travel') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/Travel.jpg" class="collage"  />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/travel.jpg" class=""/></div>
		<?php } ?>
		<?php if($cat_name == 'fashion') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/Fashion.jpg" class="collage" />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/fashion.jpg" class=""/></div>
		<?php } ?>
		<?php if($cat_name == 'music') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/music.jpg" class="collage" />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/music.jpg" class=""/></div>
		<?php } ?>
		<?php if($cat_name == 'books') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/BOOKS.jpg" class="collage" />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/books.jpg" class=""/></div>
		<?php } ?>
		<?php if($cat_name == 'look at this life') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/lookatthislife.jpg" class="collage" />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/look-at-this-life.jpg" class=""/></div>
		<?php } ?>
		<?php if($cat_name == 'question') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/question.jpg" class="collage" />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/question.jpg" class=""/></div>
		<?php } ?>
		<?php if($cat_name == 'personality') { ?>
			<img src="<?php echo $template_directory; ?>/img/collages/personality.jpg" class="collage" />
			<div class="header-label"><img src="<?php echo $template_directory; ?>/img/labels/personality.jpg" class=""/></div>
		<?php } ?>
		
	</div>
	
	
	<div>&nbsp;</div>
	
	<div class="grid">
		
		
		
		<ul>
			<?php $counter=1; while(have_posts()) : the_post(); ?>
			
			<?php 
				$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), full );
				$src = aq_resize( $src[0], 300, 175, true, false ); //resize & crop img
			?>
			
			<li class="grid-<?php echo $counter; ?>">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> ">
										
					<img src="<?php echo $src[0]; ?>" />
					<div class="text-box">
					<?php the_title(); ?>
					
						<div class="post-date"><?php echo get_the_time('d F', $post->ID) ?></div>
					
					</div>
				</a>
			</li>
			
			<?php 
				$counter++;
				if($counter > 6){
					$counter = 1;
				}
				endwhile; 
			?>
			
					
		</ul>
	
	</div>
	
	
	
	<div style="clear:both;">&nbsp;</div>
	
	
	<div class="grid-paging">
	
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
		
		<?php previous_posts_link('&laquo; Vorige ') ?>
		
		<?php next_posts_link('| Volgende &raquo;') ?>
	<?php } ?>
	
	</div>
	
</div>






<?php get_footer(); ?>