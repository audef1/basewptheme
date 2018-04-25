<?php

get_header(); ?>

	<div id="primary" class="main">
			<?php
				while ( have_posts() ) :
					the_post();
					
					if( get_post_type() == 'post' ) {
						?>
						<div class='newsentry'>
						<h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title();?></a></h2>
						<div class="newsinfo">Author: <?php echo  the_author_meta('nickname'); ?> geschrieben am: <?php the_date(); ?></div>
						<?php the_excerpt(); ?>
						</div>
						<?php
					} else {
						echo the_content();
					}

				endwhile;
			?>
	</div>
	
<?php get_footer(); ?>
