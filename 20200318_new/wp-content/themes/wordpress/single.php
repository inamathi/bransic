<?php get_header(); ?>
<?php 
	$info = SCF::get('掲載事項');
	$rec1 = SCF::get('recmixmastering');
	$rec2 = SCF::get('recmixmastering人物名');
	$com1 = SCF::get('composearrangementlyrics');
	$com2 = SCF::get('composearrangementlyrics人物名');
	$play1 = SCF::get('songspianoguitar');
	$play2 = SCF::get('songspianoguitar人物名');
 ?>

<section id="single-area">
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<h2 class="main-ttl"><?php echo get_the_title(); ?><!-- <span><?php echo get_post_time('Y.m.d'); ?></span> --></h2>
		<div id="contents-container" class="single-block">
			<div class="eyecatch-block">
	            <?php
	            $catch_thumbnail_size = 'medium';
	            if(has_post_thumbnail()){
	                the_post_thumbnail($catch_thumbnail_size);
	            } else {
	                echo catch_thumbnail_image($catch_thumbnail_size);
	            }
	            ?>
			</div>
			<div class="works-block">
				<?php if( $rec1 != ""): ?><p class="rec"><?php echo $rec1; ?> "<?php echo $rec2; ?>"</p><?php endif; ?>
				<?php if( $com1 != ""): ?><p class="com"><?php echo $com1; ?> "<?php echo $com2; ?>"</p><?php endif; ?>
				<?php if( $play1 != ""): ?><p class="play"><?php echo $play1; ?> "<?php echo $play2; ?>"</p><?php endif; ?>				
			</div>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</section><!-- creator-area fin. -->

<?php get_footer(); ?>