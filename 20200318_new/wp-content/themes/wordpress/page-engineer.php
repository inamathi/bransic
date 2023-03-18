<?php /*
   Template Name:engineer
*/ ?>
<?php get_header(); ?>
<section id="creator-area" class="engineer">
	<h2 class="main-ttl">Recording Engineer<span>エンジニア紹介</span></h2>
	<div id="contents-container" class="creator-block">
		<ul>

			<?php 
	        $args = array(
	            'post_type' => 'engineer', 
	            'posts_per_page' => -1,
	            'meta_key' => '',
	            'orderby' => '',
	            'order' => 'ASC',
	            'no_found_rows' => true,  //ページャーを使う時はfalseに。
	         );
	        $the_query = new WP_Query($args);
	        if ($the_query->have_posts()) :
	        while ($the_query->have_posts()) : $the_query->the_post();
				$image = SCF::get('エンジニア写真');
				$image = wp_get_attachment_image_src($image,'large');
				$image_url = esc_url($image[0]);
				$name_en = SCF::get('エンジニア名(英語)');
				$name_ja = SCF::get('エンジニア名(日本語)');
	         ?>
			<li>
				<div class="box">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo $image_url; ?>" alt=""></a>
						<span class="description">
						<a href="<?php the_permalink(); ?>">
							<div class="description-box">
								<div class="name"><p><?php echo $name_en; ?></p></div>
								<div class="cat"><p><?php echo $name_ja; ?></p></div>
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