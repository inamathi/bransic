<?php /*
   Template Name:company
*/ ?>
<?php get_header(); ?>
<section id="company-area" class="">
	<h2 class="main-ttl">Company<span>会社概要</span></h2>
	<div id="contents-container" class="">
		<div class="page-tab">
			<ul class="tabs">
				<li><a href="#company"><?php echo SCF::get('company_about_tab'); ?></a></li>
				<li class="access"><a href="#access"><?php echo SCF::get('company_access_tab'); ?></a></li>
				<li><a href="#request"><?php echo SCF::get('company_request_tab'); ?></a></li>
				<li><a href="#recruit"><?php echo SCF::get('company_recruit_tab'); ?></a></li>
				<?php foreach(SCF::get('company_etc_pages') as $index => $page): ?>
					<?php if ($page['company_etc_page_tab']): ?>
						<li><a href="#etc_<?php echo $index; ?>"><?php echo $page['company_etc_page_tab']; ?></a></li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="print-button">Print Out</div>

		<div id="company" class="tab-content">
			<div class="company-block">
				<h4><?php echo SCF::get('company_about_title'); ?></h4>
				<table>
					<?php foreach(SCF::get('company_about_items') as $item): ?>
						<tr>
							<th><?php echo $item['company_about_item_label']; ?></th>
							<td><?php echo nl2br($item['company_about_item_contents']); ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>

		<div id="access" class="tab-content">
			<div class="access-block">
				<h4><?php echo SCF::get('company_access_title'); ?></h4>
				<div id="access-area"></div>
				
				<?php foreach(SCF::get('company_access_buildings') as $index => $building): ?>
					<?php if ($index % 2 == 0): ?>
						<?php if ($index > 0): ?>
							</div>
							<div style="border-bottom: 1px solid #ddd;"></div>
						<?php endif; ?>
						<div class="flex">
					<?php endif; ?>
					<div class="access-block-child address">
						<h4><?php echo $building['company_access_building_name']; ?></h4>
						<p><?php echo nl2br($building['company_access_building_address']); ?></p>
						<?php for ($i = 1; $i <= 9; $i++): ?>
							<?php
								$w = $building['company_access_building_way'.$i];
								if (!$w) {
									break;
								}
								$a = explode("\r\n", $w);
								$h = array_shift($a);
								$p = implode('<br>', $a);
							?>
							<h5><?php echo $h; ?></h5>
							<p><?php echo $p; ?></p>
						<?php endfor; ?>
					</div>
				<?php endforeach; ?>
				</div>
				
			</div>
			
			<div class="print-on">
				<div class="print-access-block">
					<?php
						$parking_list = array();
						foreach(SCF::get('company_access_markers') as $marker) {
							if ($marker['company_access_marker_category'] == 'parking') {
								$parking_list[$marker['company_access_marker_near']][] = $marker;
							}
						}
					?>
					<?php foreach($parking_list as $studio => $markers): ?>
						<div class="left"><h4><?php echo $studio; ?> 駐車場情報</h4></div>
						<div class="right"></div>
						<?php foreach ($markers as $index => $marker): ?>
							<?php if ($index %2 == 0): ?>
								<div class="left">
							<?php else: ?>
								<div class="right">
							<?php endif; ?>
							<div class="print-access-block-child">
								<p class="ttl"><?php echo $marker['company_access_marker_title']; ?></p>
								<p class="address"><?php echo nl2br($marker['company_access_marker_address']); ?></p>
								<p class="price">
									<?php echo nl2br($marker['company_access_marker_price']); ?>
									<span class="max-price"><?php echo nl2br($marker['company_access_marker_limit']); ?></span>
								</p>
								<p class="number"><?php echo $marker['company_access_marker_number']; ?></p>
							</div>
						</div>
						<?php endforeach; ?>
						<?php if (count($markers) % 2 == 1): ?>
							<div class="right"></div>
						<?php endif ?>
					<?php endforeach; ?>
				</div>
			</div>
			
		</div>
		<div id="request" class="tab-content">
			<div class="request-block">
				<h4><?php echo SCF::get('company_request_title'); ?></h4>
				<div class="request-block-child">
					<p><?php echo nl2br(SCF::get('company_request_information')); ?></p>
					<div class="address">
						<h5><?php echo SCF::get('company_request_name'); ?></h5>
						<p><?php echo nl2br(SCF::get('company_request_contact')); ?></p>
						<div class="contact-btn">
							<p><a href="<?php echo home_url(); ?>/contact"><?php echo SCF::get('company_request_button'); ?></a></p>
						</div>
					</div>
				</div>
				<div class="request-block-child">
					<h4><?php echo SCF::get('company_request_flow'); ?></h4>
					<ul class="ptimeline ">
						<?php foreach(SCF::get('company_request_flows') as $index => $flow): ?>
							<li class="ptimeline-item">
								<div class="ptimeline-label">STEP<?php echo ($index + 1); ?></div>
								<div class="ptimeline-title"><?php echo $flow['company_request_flow_title']; ?></div>
								<div class="ptimeline-main"><?php echo nl2br($flow['company_request_flow_content']); ?></div>
								<div class="ptimeline-marker "></div>
							</li>
						<?php endforeach; ?>
					</ul>
					<p><?php echo nl2br(SCF::get('company_request_remark')); ?></p>
				</div>
			</div>
		</div>

		<div id="recruit" class="tab-content">
			<div class="recruit-block">
				<h4><?php echo SCF::get('company_recruit_title'); ?></h4>
				<p><?php echo nl2br(SCF::get('company_recruit_information')); ?></p>
				<div class="page-tab-child">
					<ul class="tabs-child">
						<?php 
				        $args = array(
				            'post_type' => 'recruit', 
				            'posts_per_page' => -1,
				            'meta_key' => '',
				            'orderby' => '',
				            'order' => 'ASC',
				            'no_found_rows' => true,  //ページャーを使う時はfalseに。
				         );
				        $the_query = new WP_Query($args);
				        if ($the_query->have_posts()) :
				        while ($the_query->have_posts()) : $the_query->the_post();
				         ?>
									<li><a href="#recruit-<?php the_ID(); ?>"><?php the_title(); ?></a></li>
			            <?php 
			              endwhile; endif;
			            wp_reset_postdata();
			            ?>
					</ul>
				</div>
						<?php 
				        $args = array(
				            'post_type' => 'recruit', 
				            'posts_per_page' => -1,
				            'meta_key' => '',
				            'orderby' => '',
				            'order' => 'ASC',
				            'no_found_rows' => true,  //ページャーを使う時はfalseに。
				         );
				        $the_query = new WP_Query($args);
				        if ($the_query->have_posts()) :
				        while ($the_query->have_posts()) : $the_query->the_post();
				         ?>
							<div id="recruit-<?php the_ID(); ?>" class="recruit-block-child tab-content-child">
								<h4><?php the_title(); ?></h4>
								<table>
									<?php 
									$recruit_area = SCF::get('recruit_area');	
									foreach ($recruit_area as $fields ) {
									?>
										<tr>
											<th><?php echo $fields['recruit_title']; ?></th>
											<td><?php echo nl2br($fields['recruit_info']); ?></td>
										</tr>
									<?php } ?>
								</table>
							</div>
			            <?php 
			              endwhile; endif;
			            wp_reset_postdata();
			            ?>
			</div>
		</div>

		<?php foreach(SCF::get('company_etc_pages') as $index => $page): ?>
			<?php if ($page['company_etc_page_tab']): ?>
				<div id="etc_<?php echo $index; ?>" class="tab-content">
					<h4><?php echo $page['company_etc_page_title']; ?></h4>
					<p><?php echo nl2br($page['company_etc_page_content']); ?></p>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>

	</div>
</section><!-- company-area fin. -->

<?php
    $markers = SCF::get('company_access_markers');
?>

<script>
function initMap2() {
    var map = new google.maps.Map(document.getElementById('access-area'), {
        center: {
            lat: <?php echo SCF::get('company_access_lat'); ?>,
            lng: <?php echo SCF::get('company_access_lng'); ?>
        },
        zoom: <?php echo SCF::get('company_access_zoom'); ?>
    });

    <?php foreach($markers as $marker): ?>
        <?php if ($marker['company_access_marker_lat'] && $marker['company_access_marker_lng']): ?>
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $marker['company_access_marker_lat']; ?>, <?php echo $marker['company_access_marker_lng']; ?>),
                title: '<?php echo $marker['company_access_marker_title']; ?>',
                <?php if ($marker['company_access_marker_icon']): ?>
                <?php
                    $size = '55, 83';
                    if ($marker['company_access_marker_category'] == 'parking') {
                        $size = '26, 26';
                    }
                ?>
                icon: { url: '<?php echo wp_get_attachment_image_src($marker['company_access_marker_icon'], 'full')[0]; ?>', scaledSize : new google.maps.Size(<?php echo $size; ?>) },
                <?php endif; ?>
                map: map
            });
            <?php
                $sm = '';
                if ($marker['company_access_marker_content']) {
                    $sm = $marker['company_access_marker_content'];
                } else {
                    $sm = '<p>'.$marker['company_access_marker_title'].'<br>';
                    $sm .= '住所　　　'.str_replace("\r\n", "\r\n　　　　　", $marker['company_access_marker_address']).'<br>';
                    $sm .= '料金　　　'.str_replace("\r\n", "\r\n　　　　　", $marker['company_access_marker_price']).'<br>';
                    if ($marker['company_access_marker_limit']) {
                        $sm .= '<span style="color:#00cc;">最大料金　'.str_replace("\r\n", "\r\n　　　　　", $marker['company_access_marker_limit']).'</span><br>';
                    }
                    $sm .= '収容台数　'.str_replace("\r\n", "\r\n　　　　　", $marker['company_access_marker_number']).'</p>';
                }
                $sm = str_replace(array("\r\n", "\n", "\r"), "<br>", str_replace("'", "’", $sm));
            ?>
            attachSecretMessage(marker, '<?php echo $sm; ?>', '<?php echo $marker['company_access_marker_opened']; ?>');
        <?php endif; ?>
    <?php endforeach; ?>
}

function attachSecretMessage(marker, secretMessage, opened) {
    var infowindow = new google.maps.InfoWindow({
        content: secretMessage
    });

    marker.addListener('click', function() {
        infowindow.open(marker.get('map'), marker);
    });
    
    if (opened) {
        google.maps.event.addListenerOnce(marker.get('map'), 'tilesloaded', function() {
            infowindow.open(marker.get('map'), marker);
        });
    }
}
</script>

<?php get_footer(); ?>