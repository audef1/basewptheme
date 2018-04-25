<?php

get_header(); ?>

	<div id="primary" class="main">
		<h1>
			<?php
				printf( esc_html__( 'Suchresultate für: %s' ), '<span>' . get_search_query() . '</span>' );
			?>
		</h1>
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
					<div class='searchresult'>
					<?php if (has_post_thumbnail()){ ?>
						<div class='image'><?php the_post_thumbnail( 'medium' ); ?></div>
					<?php } ?>
					<h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title();?></a></h2>
					<?php the_excerpt(); ?>
					</div>
				<?php
			endwhile;

		else :

			echo "keine suchresultate gefunden.";

		endif;
		?>
</div>
	
<?php get_footer(); ?>
