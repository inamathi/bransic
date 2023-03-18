<?php get_header(); ?>

<section id="single-creator-area" class="engineer">
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php 
			/*engineer*/
			$image = SCF::get('エンジニア写真');
			$image = wp_get_attachment_image_src($image,'large');
			$image_url = esc_url($image[0]);
			$birthday = SCF::get('生年月日');
			$birthplace = SCF::get('出身地');
			$bloodtype = SCF::get('血液型');
			$name_en = SCF::get('エンジニア名(英語)');
			$name_ja = SCF::get('エンジニア名(日本語)');
			$main_works = SCF::get('主に関わった作品');
		 ?>
		<h2 class="main-ttl"><?php echo $name_en; ?><span><?php echo $name_ja; ?></span></h2>
		<div id="contents-container" class="">
			<div id="profile-block" class="single-creator-block">
				<div class="profile-block-child left">
					<img src="<?php echo $image_url; ?>" alt="">
					<div class="more-profile">
						<p class="birthday">Birthday：<?php echo $birthday; ?></p>
						<p class="birthplace">Birthplace：<?php echo $birthplace; ?></p>
						<p class="bloodtype">Blood Type：<?php echo $bloodtype; ?></p>
						<div class="print-button">Print Out</div>
					</div>
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
					<div class="main-works">
						<p class="ttl">主に関わった作品</p>
						<p><?php echo nl2br( $main_works ); ?></p>
						<p class="andmore">and more（敬称略、順不同）<br>
						その他、CM、映画、TV、ゲーム等の劇伴多数</p>
					</div>
				</div>
			</div><!-- profile-block -->
			<div id="works-block" class="single-creator-block">
				<h3>Works</h3>

				<?php include("engineer-works.php"); ?>

			</div><!-- works-block -->
		</div>
	<?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</section><!-- single-creator-area fin. -->

<?php get_footer(); ?>