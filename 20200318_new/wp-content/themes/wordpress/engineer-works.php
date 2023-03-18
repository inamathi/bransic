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
			<li><a href="#artist_<?php echo $year; ?>">Artist</a></li>
			<li><a href="#soundtrack_<?php echo $year; ?>">Soundtrack</a></li>
			<li><a href="#livedvd_<?php echo $year; ?>">Live DVD & Blue-ray</a></li>
		</ul>
	</div>

	<div id="all_<?php echo $year; ?>" class="all_all tab-content-child">
		<?php
		$loop = "works_" . $year;
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year] == "artist" || $field_value['カテゴリ' . $year] == "soundtrack" || $field_value['カテゴリ' . $year] == "livedvd" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year]; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year]; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['recmixmastering' . $year]; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year]); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year]) ): ?>
									<?php echo $field_value['カテゴリ' . $year]; ?>
								<?php elseif( $field_value['カテゴリ2' . $year] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year]; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<div id="artist_<?php echo $year; ?>" class="artist_all tab-content-child">
		<?php
		$loop = "works_" . $year;
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year] == "artist" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year]; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year]; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['recmixmastering' . $year]; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year]); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year]) ): ?>
									<?php echo $field_value['カテゴリ' . $year]; ?>
								<?php elseif( $field_value['カテゴリ2' . $year] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year]; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<div id="soundtrack_<?php echo $year; ?>" class="soundtrack_all tab-content-child">
		<?php
		$loop = "works_" . $year;
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year] == "soundtrack" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year]; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year]; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['recmixmastering' . $year]; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year]); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year]) ): ?>
									<?php echo $field_value['カテゴリ' . $year]; ?>
								<?php elseif( $field_value['カテゴリ2' . $year] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year]; ?>
							<?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
	<div id="livedvd_<?php echo $year; ?>" class="livedvd_all tab-content-child">
		<?php
		$loop = "works_" . $year;
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year] == "livedvd" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year]; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year]; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>」<?php endif; ?><br>
								<?php echo $field_value['recmixmastering' . $year]; ?></p>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year]); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( empty($field_value['カテゴリ2' . $year]) ): ?>
									<?php echo $field_value['カテゴリ' . $year]; ?>
								<?php elseif( $field_value['カテゴリ2' . $year] == "S" ): ?>SINGLE
								<?php elseif( $field_value['カテゴリ2' . $year] =="A" ): ?>ALBUM
								<?php else: ?><?php echo $field_value['カテゴリ2' . $year]; ?>
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


<!-- プリント用 -->

<?php
$year = date("Y");
?>
<div id="works_<?php echo $year; ?>" class="works-block-child print-on">

	<div id="all_<?php echo $year; ?>" class="all_all">
		<?php
		$loop = "works_" . $year;
		$loop = SCF::get($loop);
		foreach ($loop as $field_name => $field_value ):?>
		<?php 
		    $cf_sample = wp_get_attachment_image_src($field_value['ジャケット画像' . $year],'large');
		    $imgUrl = esc_url($cf_sample[0]);
		 ?>
	    	<?php if( $field_value['カテゴリ' . $year] == "artist" || $field_value['カテゴリ' . $year] == "soundtrack" || $field_value['カテゴリ' . $year] == "livedvd" ): ?>
				<div class="block">
					<a href="<?php echo $field_value['url' . $year]; ?>" target="blank">
						<div class="left">
							<?php if( $field_value['ジャケット画像' . $year] !="" ): ?><img src="<?php echo $imgUrl;?>" alt=""><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/images/works-noimage.png" alt=""><?php endif; ?>
						</div>
						<div class="right">
							<p class="date"><?php echo $field_value['日付' . $year]; ?></p>
							<p class="title"><?php echo $field_value['タイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>「<?php endif; ?><?php echo $field_value['CDタイトル' . $year]; ?><?php if( !empty($field_value['CDタイトル' . $year]) && !empty($field_value['タイトル' . $year]) ): ?>」<?php endif; ?><br>
							<p class="recmix"><?php echo nl2br($field_value['担当箇所' . $year]); ?></p>
						</div>
						<div class="singlealbum">
							<p><?php if( $field_value['カテゴリ2' . $year] == "S" ): ?>SINGLE<?php elseif( $field_value['カテゴリ2' . $year] =="A" ): ?>ALBUM<?php else: ?><?php echo $field_value['カテゴリ2' . $year]; ?><?php endif; ?></p>
						</div>
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>

</div><!-- woks_<?php echo $year; ?> -->

