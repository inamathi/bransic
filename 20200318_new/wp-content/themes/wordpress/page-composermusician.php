<?php /*
   Template Name:composer-musician
*/ ?>
<?php get_header(); ?>
<section id="creator-area" class="composer">
	<h2 class="main-ttl">Composer・Musician・Producer<span>コンポーザー・ミュージシャン・プロデューサー紹介</span></h2>
	<div id="contents-container" class="creator-block">
		<ul>

			<?php 
	        $args = array(
	            'post_type' => 'composer_musician', 
	            'posts_per_page' => -1,
	            'meta_key' => '',
	            'orderby' => '',
	            'order' => 'ASC',
	            'no_found_rows' => true,  //ページャーを使う時はfalseに。
	         );
	        $the_query = new WP_Query($args);
	        if ($the_query->have_posts()) :
	        while ($the_query->have_posts()) : $the_query->the_post();
				$image = SCF::get('アーティスト写真');
				$image = wp_get_attachment_image_src($image,'large');
				$image_url = esc_url($image[0]);
				$name = SCF::get('アーティスト名');
				$cat = SCF::get('掲載カテゴリ');
	         ?>
			<li>
				<div class="box">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt=""></a>
						<span class="description">
						<a href="<?php the_permalink(); ?>">
							<div class="description-box">
								<div class="name"><p><?php echo $name; ?></p></div>
								<div class="cat"><p>
									<?php echo nl2br($cat); ?>
								</p></div>
							</div>
						</a>
					</span>
				</div>
			</li>
            <?php 
              endwhile; endif;
            wp_reset_postdata();
            ?>

		</ul>
	</div>
</section><!-- creator-area fin. -->
<?php get_footer(); ?>