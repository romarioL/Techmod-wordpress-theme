<?php get_header(); ?>

<div class="main-section">

<div class="Row">

<article class="post-screen col s12 l8">

	<?php  if(have_posts()): while(have_posts()): the_post()?>

	
			<div class="post-section">
				<h4><?php the_title(); ?></h4>
			    <?php  the_content();?>
			</div>

	<?php endwhile; endif; ?>

</article>
<sidebar class="post-screen col s12 l4">

	<?php get_sidebar(); ?>
	
</sidebar>

</div>

</div>


<?php get_footer(); ?>