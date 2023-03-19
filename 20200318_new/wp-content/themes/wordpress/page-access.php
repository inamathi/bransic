<?php /*
   Template Name:access
*/ ?>
<?php get_header(); ?>
<section id="access-area" class="">
	<h2 class="main-ttl">Access<span>ご案内</span></h2>
	<div id="contents-container" class="">
		<div class="page-tab">
			<!-- タブを非表示
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
			-->
		</div>
		<div class="print-button">Print Out</div>

		<div id="access" class="tab-content">
			<div class="access-block">
				<h4><?php echo SCF::get('company_access_title'); ?></h4>
				<div id="access-area"></div>
				<div class="access-grid">
					<?php foreach(SCF::get('company_access_buildings') as $index => $building): ?>
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
				</div>
			</div>
		</div>
	</div>
</section><!-- company-area fin. -->

<?php get_footer(); ?>