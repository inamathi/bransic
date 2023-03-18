<?php 
	$title = get_the_title();
	
	$twitter = SCF::get('twitter');
	$instagram = SCF::get('instagram');
	$soundcloud = SCF::get('soundcloud');
	$applemusic = SCF::get('apple_music');
	$tiktok = SCF::get('tiktok');
	
	$connected = p2p_type( 'artist_news_to_artist' )->get_connected( get_queried_object() );
	$news_list = $connected->posts;

	$show_store = false;
	$loop = "works_com";
	$loop = SCF::get($loop);
	foreach ($loop as $field_name => $field_value ) {
		if( $field_value['カテゴリ_com'] == "store" ) {
			$show_store = true;
			break;
		}
	}
?>

<div id="works" class="works-block-child tab-content print">
	<div class="page-tab-child">
		<ul class="tabs-child" style="text-align:center;">
			<li class="all_btn"><a href="#all">PROFILE</a></li>
			<li><a href="#news">NEWS</a></li>
			<li><a href="#discography">DISCOGRAPHY</a></li>
			<li><a href="#videos">VIDEOS</a></li>
			<li><a href="#live">LIVE</a></li>
			<?php if($show_store): ?><li><a href="#store">STORE</a></li><?php endif; ?>
			<?php if($twitter != ""): ?><li><a href="<?php echo $twitter; ?>" class="twitter" target="blank"><i class="fab fa-twitter"></i></a></li><?php endif; ?>
			<?php if($instagram != ""): ?><li><a href="<?php echo $instagram; ?>" class="instagram" target="blank"><i class="fab fa-instagram"></i></a></li><?php endif; ?>
			<?php if($soundcloud != ""): ?><li><a href="<?php echo $soundcloud; ?>" class="soundcloud" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/soundcloud1.png" alt=""></a></li><?php endif; ?>
			<?php if($applemusic != ""): ?><li><a href="<?php echo $applemusic; ?>" class="applemusic" target="blank"><i class="fab fa-apple"></i></a></li><?php endif; ?>
			<?php if($tiktok != ""): ?><li><a href="<?php echo $tiktok; ?>" class="tiktok" target="blank"><i class="fab fa-tiktok"></i></a></li><?php endif; ?>
		</ul>
	</div>

	<div id="all" class="all_all tab-content-child">
		<div id="profile-block" class="single-creator-block" style="width:100%">
			<div class="profile-block-child" style="width:100%">
				<?php the_content(); ?>
			</div>
		</div><!-- profile-block -->
	</div>
	
	<div id="news" class="cd_all tab-content-child">
		<?php foreach ($news_list as $news): ?>
			<div style="width:100%; padding-top:10px; padding-bottom: 10px; border-bottom:1px solid #ccc;">
				<a href="<?php echo get_permalink($news); ?>" target="_blank">
					<p style="margin-bottom:0;"><?php echo date('Y.m.d', strtotime($news->post_date)); ?>　<span style="color: #0000CC; font-weight:800">|　INFORMATION</span><br>
					<?php echo $news->post_title; ?></p>
				</a>
			</div>
		<?php endforeach; ?>
		</ul>
	</div>
	
	<div id="videos" class="cd_all tab-content-child">
		<?php
		$loop = "works_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		    
		    $video_tag = '';
		    if ($field_value['カテゴリ_com'] == "videos") {
		        if ($video_id = get_youtube_id($field_value['url_com'])) {
		            $video_tag = ' class="js-modal-btn" data-video-id="'.$video_id.'"';
		        }
		    }
		 ?>
	    	<?php if( $field_value['カテゴリ_com'] == "videos" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url_com']; ?>" target="blank"<?php echo $video_tag; ?>>
						<div class="left">
							<?php if( $field_value['ジャケット画像_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル_com']; ?><?php if( !empty($field_value['CDタイトル_com']) && !empty($field_value['タイトル_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル_com']; ?><?php if( !empty($field_value['CDタイトル_com']) && !empty($field_value['タイトル_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics_com']; ?><?php if( !empty($field_value['composearrangementlyrics_com']) && !empty($field_value['songspianoguitar_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2_com']) ): ?>
								<?php if( $field_value['カテゴリ_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	
	<div id="discography" class="cd_all tab-content-child">
		<?php
		$loop = "works_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		    
		    $video_tag = '';
		 ?>
	    	<?php if( $field_value['カテゴリ_com'] == "discography" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url_com']; ?>" target="blank"<?php echo $video_tag; ?>>
						<div class="left">
							<?php if( $field_value['ジャケット画像_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル_com']; ?><?php if( !empty($field_value['CDタイトル_com']) && !empty($field_value['タイトル_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル_com']; ?><?php if( !empty($field_value['CDタイトル_com']) && !empty($field_value['タイトル_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics_com']; ?><?php if( !empty($field_value['composearrangementlyrics_com']) && !empty($field_value['songspianoguitar_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2_com']) ): ?>
								<?php if( $field_value['カテゴリ_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	
	<div id="live" class="cd_all tab-content-child">
		<?php
		$loop = "works_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		    
		    $video_tag = '';
		 ?>
	    	<?php if( $field_value['カテゴリ_com'] == "live" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url_com']; ?>" target="blank"<?php echo $video_tag; ?>>
						<div class="left">
							<?php if( $field_value['ジャケット画像_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル_com']; ?><?php if( !empty($field_value['CDタイトル_com']) && !empty($field_value['タイトル_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル_com']; ?><?php if( !empty($field_value['CDタイトル_com']) && !empty($field_value['タイトル_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics_com']; ?><?php if( !empty($field_value['composearrangementlyrics_com']) && !empty($field_value['songspianoguitar_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2_com']) ): ?>
								<?php if( $field_value['カテゴリ_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	
	<div id="store" class="cd_all tab-content-child">
		<?php
		$loop = "works_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		    
		    $video_tag = '';
		 ?>
	    	<?php if( $field_value['カテゴリ_com'] == "store" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url_com']; ?>" target="blank"<?php echo $video_tag; ?>>
						<div class="left">
							<?php if( $field_value['ジャケット画像_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル_com']; ?><?php if( !empty($field_value['CDタイトル_com']) && !empty($field_value['タイトル_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル_com']; ?><?php if( !empty($field_value['CDタイトル_com']) && !empty($field_value['タイトル_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics_com']; ?><?php if( !empty($field_value['composearrangementlyrics_com']) && !empty($field_value['songspianoguitar_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2_com']) ): ?>
								<?php if( $field_value['カテゴリ_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>

<script>
(function($) {
    $(".js-modal-btn").modalVideo();
    $(".js-modal-btn").on("click", function() {
        return false;
    });
})(jQuery);
</script>

<?php
function get_youtube_id($url) {
    // https://www.youtube.com/watch?v=6rOVY2UkBRk
    if (preg_match('/youtube\.com\/watch\?v=(.+)/', $url, $m)) {
        return $m[1];
    }
    // https://youtu.be/6rOVY2UkBRk
    if (preg_match('/youtu\.be\/(.+)/', $url, $m)) {
        return $m[1];
    }
    return '';
}
?>