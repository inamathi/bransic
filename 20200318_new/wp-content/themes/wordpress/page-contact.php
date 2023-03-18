<?php /*
   Template Name:contact
*/ ?>
<?php get_header(); ?>
<section id="contact-area" class="">
	<h2 class="main-ttl">Contact<span>お問い合わせ</span></h2>
	<div id="contents-container" class="">
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="contact-block">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
	</div>
</section><!-- contact-area fin. -->
<?php get_footer(); ?>