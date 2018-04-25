<?php

get_header(); ?>

	<div id="primary" class="main news">
			<?php
				while ( have_posts() ) : the_post();?>
				<div class="newsentry">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
					<?php

					echo the_excerpt();
					?>
				</div>
				<?php
				endwhile;
			?>
	</div>

<?php get_footer(); ?>
