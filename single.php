<?php

get_header(); ?>

	<div id="primary" class="main news single">
			<?php
				while ( have_posts() ) :
					the_post();
					?>
						<div class='newsentry'>
						<h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title();?></a></h2>
						<div class="newsinfo">Author: <?php echo  the_author_meta('nickname'); ?> geschrieben am: <?php the_date(); ?></div>
						<?php the_content(); ?>
						</div>
						<?php

				endwhile;
			?>
	</div>
	
<?php get_footer(); ?>
