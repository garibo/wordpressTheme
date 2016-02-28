<div id="main" class="group">
	<div id="blog" class="left-col">

		<div id="post">
			<?php if (have_posts()):while(have_posts()):the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="byline">
				Escrito por <?php the_author_posts_link(); ?> en  <a href="<?php the_permalink(); ?>"><?php the_time('l f d, Y'); ?></a>
			</div>
			<?php the_content('Read More...'); ?>
		<?php endwhile; else: ?>
			<p><?php _e('No se encontro ningun articulo'); ?></p>
		<?php endif; ?>
		</div>

	</div>
</div>