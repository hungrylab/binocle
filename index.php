<?php if (!have_posts()) : ?>
<div class="alert-box warning radius">
	<?php _e('Sorry, no results were found.', 'binocle'); ?>
</div>
<?php get_search_form(); ?>
<?php else: ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>
<?php endif; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
<nav class="postnav">
	<ul class="pagination" role="menubar" aria-label="Pagination">
		<li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
		<li class="current"><a href="">1</a></li>
		<li><a href="">2</a></li>
		<li><a href="">3</a></li>
		<li><a href="">4</a></li>
		<li class="unavailable" aria-disabled="true"><a href="">&hellip;</a></li>
		<li><a href="">12</a></li>
		<li><a href="">13</a></li>
		<li class="arrow"><a href="">Next &raquo;</a></li>
		<li class="previous"><?php next_posts_link(__('&larr; Older posts', 'binocle')); ?></li>
		<li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'binocle')); ?></li>
	</ul>
</nav>
<?php endif; ?>
