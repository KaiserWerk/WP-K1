<?php get_header(); ?>
	<div class="row">
		<div class="eight columns">
			
			<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="twelve columns">
						<h4 class="post-header"><?php the_title(); ?> <span style="font-size: 40%;">Posted on <?php the_time('F jS, Y') ?></span></h4>
						<p><?php the_content(__('(more...)')); ?></p>
					</div>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>