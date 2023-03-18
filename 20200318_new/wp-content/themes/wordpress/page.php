<?php get_header(); ?>

<section id="single-area">
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<h2 class="main-ttl"><?php echo get_the_title(); ?></h2>
		<div id="contents-container" class="single-block">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</section><!-- creator-area fin. -->

<?php get_footer(); ?>