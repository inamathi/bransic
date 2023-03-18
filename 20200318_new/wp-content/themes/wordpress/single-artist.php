<?php get_header(); ?>

<section id="single-creator-area" class="artist">
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php 
			$name = SCF::get('アーティスト名');
		 ?>
		<h2 class="main-ttl"><?php echo $name; ?><span><?php if(is_single(12)): ?><span class="partner"><a href="http://www.legendoor.com/" target="blank">Legendoor 共同マネジメント</a></span><?php endif; ?></span></h2>
		<div id="contents-container" class="">
			<section id="studio-area" class="">
				<div class="swiper-container slider">
				    <div class="swiper-wrapper">
						<?php 
						$imggroup = SCF::get('artist_image');
						foreach ($imggroup as $fields ) {
						    $imgurl = wp_get_attachment_image_src($fields['アーティスト写真'] , 'full');
						?>
						<div class="swiper-slide"><img src="<?php echo $imgurl[0]; ?>"></div>
						<?php } ?>
				    </div>
				    <div class="swiper-button-next" style="color:#0000CC"></div>
				    <div class="swiper-button-prev" style="color:#0000CC"></div>
				</div>
			</section>
			<div id="works-block" class="single-creator-block">
				<?php include("artist-works.php"); ?>
			</div><!-- works-block -->
		</div>
	<?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</section><!-- single-creator-area fin. -->

<?php get_footer(); ?>