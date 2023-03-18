<?php get_header(); ?>
<section id="archives-area" class="">
	<h2 class="main-ttl">Information<span>最新情報</span></h2>
	<div id="contents-container" class="">

	    <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
        <?php 
		$info = SCF::get('掲載事項');
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
	        <article id="flex-area" class="main-block">
				<a href="<?php the_permalink(); ?>">
					<div class="flex-block eyecatch-area">
						<div class="eyecatch-block">
									<div style="background-image: url(
                                    <?php
                                    $catch_thumbnail_size = 'og_top_thumbnail';
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail_url($catch_thumbnail_size);
                                    } else {
                                        echo og_image($catch_thumbnail_size);
                                    }
                                    ?>
									);"></div>
										<?php if(has_category()): ?>
											<div class="cat">
<!-- 
												<?php if( $category_name == "CD" ): ?><i class="fas fa-compact-disc"></i>
												<?php elseif( $category_name == "MOVIE" ): ?><i class="fas fa-film"></i>
												<?php elseif( $category_name == "TV" ): ?><i class="fas fa-tv"></i>
												<?php elseif( $category_name == "OTHER" ): ?><img src="<?php echo get_template_directory_uri(); ?>/images/other-logo.png" alt="OTHER">
												<?php endif; ?>
 -->
 												<p><?php echo $category_name; ?></p>
											</div>
										<?php endif; ?>
						</div>
					</div>
					<div class="flex-block text-area">
						<div class="text-block">
							<div class="text-block-head">
								<!-- <p class="date"><?php echo get_post_time('Y.m.d'); ?></p> -->
							  	<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</div><!-- text-area -->
				</a>
			</article><!-- flex-area -->
    	<?php endwhile; ?>
	    <?php else : ?>
	    <?php endif; ?>
	</div><!-- contents-container -->
    <?php if( function_exists("the_pagination") ) the_pagination(); ?>

</section><!-- contact-area fin. -->
<?php get_footer(); ?>