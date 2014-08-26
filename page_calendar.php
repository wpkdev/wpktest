<?php /* Template Name: Kalender */









get_header(); 
?>


<div class="calendar-page">
	
	
	
	<div class="header">
		<img src="<?php echo $template_directory; ?>/img/kalender.jpg" class="collage" />
		<div class="header-label">
		<img src="<?php echo $template_directory; ?>/img/labels/calendar.jpg" class=""/>
		</div>
	</div>
	
	
	<div>&nbsp;</div>
	
	<div class="grid">
		<ul>
		<?php
			
			
			$p  =  $_GET["pg"];
			
			if($p == false){
				$p = 1;
				$paging = 2;
			}
			if($p == 1){
				$paging = 2;
			}
			
			
			if($p > 1){
				$paging = ($p * 3)-2;
			}
			
			
			$week = date('W');
			$year = date('Y');
			if($p == 1){
				$start_date = $week - ($paging);
			}else{
				$start_date = $week - ($paging + 1);
			}
			$end_date = ($week - $paging) + 2;
			
			if($start_date == -1){ $start_date = 53; $year = date('Y')-1; }
			if($start_date == -2){ $start_date = 52; $year = date('Y')-1; }
			if($start_date == -3){ $start_date = 51; $year = date('Y')-1; }
			if($start_date == -4){ $start_date = 50; $year = date('Y')-1; }
			
			$week_start = new DateTime();
			$week_start->setISODate($year,$start_date);
			$week_end = new DateTime();
			$week_end->setISODate($year,$end_date);
			
			$end_date =  $week_end;
			if($p == 1){
				date_add($end_date,date_interval_create_from_date_string("7 days"));
			}
			$end_date = date_format($end_date,"d-M-Y");
			
			
			
			
			
			$args = array(
				'date_query' => array(
					array('after'     => $week_start->format('d-M-Y'),  'before' => $end_date    ),
						'inclusive' => true,
					
				),
				'posts_per_page' => -1,
			);
			
			
			$weeknumber = 10000;
			
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) : 
			while ( $the_query->have_posts() ) : $the_query->the_post(); 
				$date = strtotime(get_the_time('d-m-Y', $post->ID));
				
				
				
				
				$week = (int)date('W', $date); 
				if($weeknumber != $week){
					echo '<li class="week-number"><hr/><span>Week '.$week.'</span></li>';
					$weeknumber = $week;
					$counter = 1;
				}
			?>
			
			
			<?php 
				$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), full );
				$src = aq_resize( $src[0], 300, 175, true, false ); //resize & crop img
				
			?>
			
			
			<li class="grid-<?php echo $counter; ?>">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> ">
					<div class="category-box">
						<?php 
							$cat =  get_the_category( $post->ID );
							
						 ?>
						 <img src="<?php echo $template_directory; ?>/img/labels/<?php echo  $cat[0]->category_nicename; ?>.jpg" />
						 
					</div>
					
					<img src="<?php echo $src[0]; ?>" />
					<div class="text-box">
					<?php the_title(); ?>
					
						<div class="post-date"><?php echo get_the_time('d F', $post->ID) ?></div>
					
					</div>
				</a>
			</li>
			
			
		<?php 
			$counter++;
			
			endwhile;
			endif;

		?>
		</ul>
	
	</div>
	
	<?php 
		$next = $p + 1;
		$prev = $p - 1;  
	
	?>
	
	<div style="clear:both;">&nbsp;</div>
	<div class="grid-paging">
	
	<?php if($prev > 0){ ?><a href="?pg=<?php echo $prev; ?>">< Vorige</a><?php } ?> 
	| 
	
	
	
	<?php if($the_query->found_posts > 13){ ?><a href="?pg=<?php echo $next; ?>">Volgende ></a><?php } ?> 
	
	</div>
</div>






<?php get_footer(); ?>