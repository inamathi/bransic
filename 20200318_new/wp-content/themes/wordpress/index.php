<?php get_header(); ?>

<!-- ==================
	left
================== -->
	<section id="left-area" class="pc">
		<div id="info-area" class="left-block">
			<div class="info-block">

				<div class="swiper-container" style="height: 100%;width: 100%;">
				    <!-- Additional required wrapper -->
				    <div class="swiper-wrapper">
				        <!-- Slides -->

						<?php 
						$loop_count = 1;
				        $args = array(
				            'post_type' => 'post', 
				            'posts_per_page' => 18,
				            'meta_key' => '',
				            'orderby' => '',
				            'order' => 'ASC',
				            'no_found_rows' => true,  //ページャーを使う時はfalseに。
				         );
				        $the_query = new WP_Query($args);
				        if ($the_query->have_posts()) :
				        while ($the_query->have_posts()) : $the_query->the_post();
						$info = SCF::get('掲載事項');
						$rec1 = SCF::get('recmixmastering');
						$rec2 = SCF::get('recmixmastering人物名');
						$com1 = SCF::get('composearrangementlyrics');
						$com2 = SCF::get('composearrangementlyrics人物名');
						$play1 = SCF::get('songspianoguitar');
						$play2 = SCF::get('songspianoguitar人物名');
			            // カテゴリを全て取得
			            $category = get_the_category();
			            // カテゴリIDを取得
			            $category_id = $category[0]->cat_ID;
			            // カテゴリ名を取得
			            $category_name = $category[0]->cat_name;
			            // スラッグを取得
			            $category_slug = $category[0]->category_nicename;
			            // カテゴリへのリンクを取得
			            $category_link = get_category_link($category_id);
				         ?>
						<?php if( $loop_count == 1 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 4 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 7 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 10 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 13 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 16 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
							<li>
								<span class="post">
									<a href="<?php the_permalink(); ?>" style="background-image: url(
                                    <?php
                                    $catch_thumbnail_size = 'og_top_thumbnail';
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail_url($catch_thumbnail_size);
                                    } else {
                                        echo og_image($catch_thumbnail_size);
                                    }
                                    ?>
									);"></a>
									<div class="description">
										<a href="<?php the_permalink(); ?>">
											<!-- <div class="date"><p><?php echo get_post_time('Y.m.d'); ?></p></div> -->
											<div class="ttl"><p><?php the_title(); ?></p></div>
											<?php if( $rec1 != ""): ?><p class="rec"><?php echo $rec1; ?> "<?php echo $rec2; ?>"</p><?php endif; ?>
											<?php if( $com1 != ""): ?><p class="com"><?php echo $com1; ?> "<?php echo $com2; ?>"</p><?php endif; ?>
											<?php if( $play1 != ""): ?><p class="play"><?php echo $play1; ?> "<?php echo $play2; ?>"</p><?php endif; ?>
										</a>
										<?php if(has_category()): ?>
											<div class="cat">
												<?php if( $category_name == "CD" ): ?><i class="fas fa-compact-disc"></i>
												<?php elseif( $category_name == "MOVIE" ): ?><i class="fas fa-film"></i>
												<?php elseif( $category_name == "TV" ): ?><i class="fas fa-tv"></i>
												<?php elseif( $category_name == "OTHER" ): ?><img src="<?php echo get_template_directory_uri(); ?>/images/other-logo.png" alt="OTHER">
												<?php endif; ?><p><?php echo $category_name; ?></p>
											</div>
										<?php endif; ?>
									</div>
								</span>
							</li>
						<?php if( $loop_count == 3 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 6 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 9 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 12 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 15 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 18 ): ?></ul><?php endif; ?>
						<?php $loop_count ++; ?>
			            <?php 
			              endwhile; endif;
			            wp_reset_postdata();
			            ?>

				    </div>
				    <!-- If we need pagination -->
				    <div class="swiper-pagination swiper-pagination-white"></div>
				    
				    <!-- If we need navigation buttons -->
				    <div class="swiper-button-prev swiper-button-white"></div>
				    <div class="swiper-button-next swiper-button-white"></div>
				</div>

			</div>
		</div>
	</section><!-- left-area -->


<!-- ==================
	right
================== -->
	<section id="right-area">
		<div id="logo-area" class="right-block">
			<div class="logo-block">
				<p class="split split1">Composer</p>
				<p class="split split2">Musician</p>
				<p class="split split3">Artist</p>
				<p class="split split4 split-long">Managing　a　creative　team</p>
				<p class="split split5"><img src="<?php echo get_template_directory_uri(); ?>/images/top-logo.png" alt="" class="fade-img"></p>
			</div>
		</div>
	<footer>
		<div class="box">
		  <p>©Copyright<?php echo date("Y"); ?> bransic.All Rights Reserved.</p>
		 </div>
	</footer>

	</section><!-- right-area -->

	<!-- ==================
	mobile bottom
================== -->
	<section id="bottom-area" class="sp">
		<div id="info-area" class="bottom-block">
			<div class="info-block">
				<div class="swiper-container" style="height: 100%;width: 100%;">
				    <!-- Additional required wrapper -->
				    <div class="swiper-wrapper">
				        <!-- Slides -->
						<?php 
						$loop_count = 1;
				        $args = array(
				            'post_type' => 'post', 
				            'posts_per_page' => 18,
				            'meta_key' => '',
				            'orderby' => '',
				            'order' => 'ASC',
				            'no_found_rows' => true,  //ページャーを使う時はfalseに。
				         );
				        $the_query = new WP_Query($args);
				        if ($the_query->have_posts()) :
				        while ($the_query->have_posts()) : $the_query->the_post();
						$info = SCF::get('掲載事項');
						$rec1 = SCF::get('recmixmastering');
						$rec2 = SCF::get('recmixmastering人物名');
						$com1 = SCF::get('composearrangementlyrics');
						$com2 = SCF::get('composearrangementlyrics人物名');
						$play1 = SCF::get('songspianoguitar');
						$play2 = SCF::get('songspianoguitar人物名');
			            // カテゴリを全て取得
			            $category = get_the_category();
			            // カテゴリIDを取得
			            $category_id = $category[0]->cat_ID;
			            // カテゴリ名を取得
			            $category_name = $category[0]->cat_name;
			            // スラッグを取得
			            $category_slug = $category[0]->category_nicename;
			            // カテゴリへのリンクを取得
			            $category_link = get_category_link($category_id);
				         ?>
						<?php if( $loop_count == 1 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 4 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 7 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 10 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 13 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
						<?php if( $loop_count == 16 ): ?><ul class="info-list swiper-slide"><?php endif; ?>
							<li>
								<span class="post">
									<a href="<?php the_permalink(); ?>" style="background-image: url(
                                    <?php
                                    $catch_thumbnail_size = 'og_top_thumbnail';
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail_url($catch_thumbnail_size);
                                    } else {
                                        echo og_image($catch_thumbnail_size);
                                    }
                                    ?>
									);"></a>
									<div class="description">
										<a href="<?php the_permalink(); ?>">
											<!-- <div class="date"><p><?php echo get_post_time('Y.m.d'); ?></p></div> -->
											<div class="ttl"><p><?php the_title(); ?></p></div>
											<?php if( $rec1 != ""): ?><p class="rec"><?php echo $rec1; ?> "<?php echo $rec2; ?>"</p><?php endif; ?>
											<?php if( $com1 != ""): ?><p class="com"><?php echo $com1; ?> "<?php echo $com2; ?>"</p><?php endif; ?>
											<?php if( $play1 != ""): ?><p class="play"><?php echo $play1; ?> "<?php echo $play2; ?>"</p><?php endif; ?>
										</a>
										<?php if(has_category()): ?>
											<div class="cat">
												<?php if( $category_name == "CD" ): ?><i class="fas fa-compact-disc"></i>
												<?php elseif( $category_name == "MOVIE" ): ?><i class="fas fa-film"></i>
												<?php elseif( $category_name == "TV" ): ?><i class="fas fa-tv"></i>
												<?php elseif( $category_name == "OTHER" ): ?><img src="<?php echo get_template_directory_uri(); ?>/images/other-logo.png" alt="OTHER">
												<?php endif; ?><p><?php echo $category_name; ?></p>
											</div>
										<?php endif; ?>
									</div>
								</span>
							</li>
						<?php if( $loop_count == 3 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 6 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 9 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 12 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 15 ): ?></ul><?php endif; ?>
						<?php if( $loop_count == 18 ): ?></ul><?php endif; ?>
						<?php $loop_count ++; ?>
			            <?php 
			              endwhile; endif;
			            wp_reset_postdata();
			            ?>
				    </div>
				    <!-- If we need pagination -->
				    <div class="swiper-pagination swiper-pagination-white"></div>
				    
				    <!-- If we need navigation buttons -->
				    <div class="swiper-button-prev swiper-button-white"></div>
				    <div class="swiper-button-next swiper-button-white"></div>
				</div>
			</div>
		</div>
	</section><!-- bottom-area -->


<div class="line1"></div>
<div class="line2"></div>
<div class="line3"></div>
<div class="line4"></div>
<div class="line5"></div>

<?php get_footer(); ?>
