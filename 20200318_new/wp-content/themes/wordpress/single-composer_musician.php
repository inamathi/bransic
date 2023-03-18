<?php get_header(); ?>

<section id="single-creator-area" class="composer">
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php 
			/*engineer*/
			$image = SCF::get('アーティスト写真');
			$image = wp_get_attachment_image_src($image,'large');
			$image_url = esc_url($image[0]);
			$name = SCF::get('アーティスト名');
			$birthday = SCF::get('生年月日');
			$birthplace = SCF::get('出身地');
			$bloodtype = SCF::get('血液型');
			$hp = SCF::get('HP');
			$twitter = SCF::get('twitter');
			$instagram = SCF::get('instagram');
			$soundcloud = SCF::get('soundcloud');
			$applemusic = SCF::get('applemusic');
		 ?>
		<h2 class="main-ttl"><?php echo $name; ?><span><?php if(is_single(12)): ?><span class="partner"><a href="http://www.legendoor.com/" target="blank">Legendoor 共同マネジメント</a></span><?php endif; ?></span></h2>
		<div id="contents-container" class="">
			<div id="profile-block" class="single-creator-block">
				<div class="profile-block-child left">
					<img src="<?php echo $image_url; ?>" alt="">
					<div class="more-profile">
						<?php if($birthday != ""): ?><p class="birthday">Birthday：<?php echo $birthday; ?></p><?php endif; ?>
						<?php if($birthplace != ""): ?><p class="birthplace">Birthplace：<?php echo $birthplace; ?></p><?php endif; ?>
						<?php if($bloodtype != ""): ?><p class="bloodtype">Blood Type：<?php echo $bloodtype; ?></p><?php endif; ?>
					</div>
					<div class="sns-link">
						<?php if($hp != ""): ?><a href="<?php echo $hp; ?>" class="hp" target="blank"><i class="fas fa-home"></i></a><?php endif; ?>
						<?php if($twitter != ""): ?><a href="<?php echo $twitter; ?>" class="twitter" target="blank"><i class="fab fa-twitter"></i></a><?php endif; ?>
						<?php if($instagram != ""): ?><a href="<?php echo $instagram; ?>" class="instagram" target="blank"><i class="fab fa-instagram"></i></a><?php endif; ?>
						<?php if($soundcloud != ""): ?><a href="<?php echo $soundcloud; ?>" class="soundcloud" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/soundcloud1.png" alt=""></a><?php endif; ?>
						<?php if($applemusic != ""): ?><a href="<?php echo $applemusic; ?>" class="applemusic" target="blank"><i class="fab fa-apple"></i></a><?php endif; ?>
					</div>
					<div class="print-button">Print Out</div>
				</div>
				<div class="profile-block-child right">
					<?php the_content(); ?>
					<table>
						<?php
						$history = SCF::get('history');
						foreach ($history as $fields ) { ?>
							<tr>
								<td class="year"><?php echo $fields['年']; ?></td>
								<td class="history"><?php echo $fields['概要']; ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div><!-- profile-block -->
			<div id="works-block" class="single-creator-block">
				<h3>Works</h3>

				<?php include("composer_musician-works.php"); ?>

			</div><!-- works-block -->
		</div>
	<?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</section><!-- single-creator-area fin. -->

<?php get_footer(); ?>