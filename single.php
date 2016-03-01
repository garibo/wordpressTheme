<?php get_header(); ?>
<div id="main" class="group">
	<div id="blog" class="left-col">

		<div id="post">
			<?php if (have_posts()):while(have_posts()):the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<div class="byline">
				Escrito por <?php the_author_posts_link(); ?> en  <a href="<?php the_permalink(); ?>"><?php the_time('l f d, Y'); ?></a>
			</div>
			<?php the_content('Read More...'); ?>
			<?php endwhile ?>
			<?php endif; ?>
			<div class="navi">
				<div class="right">
					<?php previous_posts_link('Anterior'); ?> /
					<?php next_posts_link('Siguiente'); ?>
				</div>
			</div>
		</div>

	</div>
</div>
<?php get_footer(); ?>