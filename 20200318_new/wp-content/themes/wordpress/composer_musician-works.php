<?php 
	$title = get_the_title(); 
?>


<div class="page-tab print">
	<ul class="tabs">
		<?php
		$year = date("Y");
		while( 1 ) {
		  if( $year===2014 ){
		    break;
		  }
		?>
				<li><a href="#works_<?php echo $year; ?>"><?php echo $year; ?><?php if( $year == "2015" ): ?>〜<?php endif; ?></a></li>
		<?php 
		  $year--;
		}
		?>
	</ul>
</div>

<?php
$year = date("Y");
while( 1 ) {
	if( $year===2014 ){
	break;
	}
?>
<div id="works_<?php echo $year; ?>" class="works-block-child tab-content print">
	<div class="page-tab-child">
		<ul class="tabs-child">
			<li class="all_btn"><a href="#all_<?php echo $year; ?>">All</a></li>
			<li><a href="#cd_<?php echo $year; ?>">CD</a></li>
			<li><a href="#tv-movie-cm_<?php echo $year; ?>">TV・MOVIE・CM</a></li>
			<li><a href="#other_<?php echo $year; ?>">Other</a></li>
		</ul>
	</div>

	<div id="all_<?php echo $year; ?>" class="all_all tab-content-child">
		<?php
		$loop = "works_" . $year . "_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year . '_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
			<?php if( $field_value['カテゴリ' . $year . '_com'] == "cd" || $field_value['カテゴリ' . $year . '_com'] == "tv" || $field_value['カテゴリ' . $year . '_com'] == "movie" || $field_value['カテゴリ' . $year . '_com'] == "cm" || $field_value['カテゴリ' . $year . '_com'] == "other" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year . '_com']; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year . '_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year . '_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics' . $year . '_com']; ?><?php if( !empty($field_value['composearrangementlyrics' . $year . '_com']) && !empty($field_value['songspianoguitar' . $year . '_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar' . $year . '_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year . '_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year . '_com']) ): ?>
								<?php if( $field_value['カテゴリ' . $year . '_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ' . $year . '_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year . '_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<div id="cd_<?php echo $year; ?>" class="cd_all tab-content-child">
		<?php
		$loop = "works_" . $year . "_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year . '_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year . '_com'] == "cd" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year . '_com']; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year . '_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year . '_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics' . $year . '_com']; ?><?php if( !empty($field_value['composearrangementlyrics' . $year . '_com']) && !empty($field_value['songspianoguitar' . $year . '_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar' . $year . '_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year . '_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year . '_com']) ): ?>
								<?php if( $field_value['カテゴリ' . $year . '_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ' . $year . '_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year . '_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<div id="tv-movie-cm_<?php echo $year; ?>" class="tv-movie-cm_all tab-content-child">
		<h4>TV</h4>
		<div class="tv-movie-cm_block">
		<?php
		$loop = "works_" . $year . "_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year . '_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year . '_com'] == "tv" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year . '_com']; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year . '_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year . '_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics' . $year . '_com']; ?><?php if( !empty($field_value['composearrangementlyrics' . $year . '_com']) && !empty($field_value['songspianoguitar' . $year . '_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar' . $year . '_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year . '_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year . '_com']) ): ?>
								<?php if( $field_value['カテゴリ' . $year . '_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ' . $year . '_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year . '_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
		</div>
		<h4>MOVIE</h4>
		<div class="tv-movie-cm_block">
		<?php
		$loop = "works_" . $year . "_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year . '_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year . '_com'] == "movie" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year . '_com']; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year . '_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year . '_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics' . $year . '_com']; ?><?php if( !empty($field_value['composearrangementlyrics' . $year . '_com']) && !empty($field_value['songspianoguitar' . $year . '_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar' . $year . '_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year . '_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year . '_com']) ): ?>
								<?php if( $field_value['カテゴリ' . $year . '_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ' . $year . '_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year . '_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
		</div>
		<h4>CM</h4>
		<div class="tv-movie-cm_block">
		<?php
		$loop = "works_" . $year . "_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year . '_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year . '_com'] == "cm" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year . '_com']; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year . '_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year . '_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics' . $year . '_com']; ?><?php if( !empty($field_value['composearrangementlyrics' . $year . '_com']) && !empty($field_value['songspianoguitar' . $year . '_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar' . $year . '_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year . '_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year . '_com']) ): ?>
								<?php if( $field_value['カテゴリ' . $year . '_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ' . $year . '_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year . '_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
		</div>
	</div>
	<div id="other_<?php echo $year; ?>" class="other_all tab-content-child">
		<?php
		$loop = "works_" . $year . "_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year . '_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year . '_com'] == "other" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year . '_com']; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year . '_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year . '_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics' . $year . '_com']; ?><?php if( !empty($field_value['composearrangementlyrics' . $year . '_com']) && !empty($field_value['songspianoguitar' . $year . '_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar' . $year . '_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year . '_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year . '_com']) ): ?>
								<?php if( $field_value['カテゴリ' . $year . '_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ' . $year . '_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year . '_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div><!-- woks_<?php echo $year; ?> -->
<?php 
  $year--;
}
?>


<!-- ===============
	プリント用
=============== -->

<?php
$year = date("Y");
?>
<div id="works_<?php echo $year; ?>" class="works-block-child print-on">

	<div id="all_<?php echo $year; ?>" class="all_all">
		<?php
		$loop = "works_" . $year . "_com";
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year . '_com'],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year . '_com'] == "cd" || $field_value['カテゴリ' . $year . '_com'] == "tv" || $field_value['カテゴリ' . $year . '_com'] == "movie" || $field_value['カテゴリ' . $year . '_com'] == "cm" || $field_value['カテゴリ' . $year . '_com'] == "other" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year . '_com']; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year . '_com'] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year . '_com']; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year . '_com']; ?><?php if( !empty($field_value['CDタイトル' . $year . '_com']) && !empty($field_value['タイトル' . $year . '_com']) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['composearrangementlyrics' . $year . '_com']; ?><?php if( !empty($field_value['composearrangementlyrics' . $year . '_com']) && !empty($field_value['songspianoguitar' . $year . '_com']) ): ?> , <?php endif; ?><?php echo $field_value['songspianoguitar' . $year . '_com']; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year . '_com']); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year . '_com']) ): ?>
								<?php if( $field_value['カテゴリ' . $year . '_com'] == "movie" ): ?>映画
									<?php else: ?><?php echo $field_value['カテゴリ' . $year . '_com']; ?>
								<?php endif; ?>
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year . '_com'] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year . '_com']; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>

</div><!-- woks_<?php echo $year; ?> -->

