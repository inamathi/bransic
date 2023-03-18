<?php /*
   Template Name:studio
*/ ?>
<?php get_header(); ?>
<section id="studio-area" class="">

	<h2 class="main-ttl">Studio<span>Rec・Mixスタジオ紹介</span></h2>
	<div id="contents-container" class="">

		<div class="swiper-container slider">
		    <div class="swiper-wrapper">
				<?php 
				$imggroup = SCF::get('studio_image' , 102);	
				foreach ($imggroup as $fields ) {
				    $imgurl = wp_get_attachment_image_src($fields['スタジオ画像'] , 'full');
				?>
				<div class="swiper-slide"><img src="<?php echo $imgurl[0]; ?>"></div>
				<?php } ?>
		    </div>
		    <div class="swiper-button-next swiper-button-white"></div>
		    <div class="swiper-button-prev swiper-button-white"></div>
		</div>

		<div class="page-tab large">
			<ul class="tabs">
				<li><a href="#studioab">Studio A・B<span>Mix Studio</span></a></li>
				<li><a href="#studioc">Studio C<span>Recording Studio</span></a></li>
			</ul>
		</div>
		<div id="studioab" class="tab-content">
			<div class="studio-block-container">
				<div id="studio-block-image" class="studio-block print">
					<div class="studio-block-child desc">
<!-- 
						<h4>SIGN SOUND MIX ROOM</h4>
						<p>クライアントルームを併設しミックスチェックなどにご使用いただけます。<br>
							またオプションで5.chサラウンドにも対応します。<br>
						スケジュール、料金等お気軽にご相談ください。</p>
 -->
					</div>
				</div><!-- studio-block-img -->
				<div id="studio-block-equipments" class="studio-block">
					<div class="page-tab-child">
						<ul class="tabs-child">
							<li><a href="#equipments">Equipments</a></li>
							<li><a href="#plugins">Plug-ins</a></li>
							<li><a href="#floormap">Floor Map</a></li>
							<li><a href="<?php echo home_url(); ?>/company#access">Access to Studio</a></li>
							<div class="print-button">Print Out</div>
						</ul>
					</div>
					<div id="equipments" class="tab-content-child">
						<div id="equipments-area">
							<div class="equipments-block table left">

								<?php
								$datas = TablePress::$controller->model_table->load(27);
								$datas = $datas['data'];
								?>
								<table>
								    <?php foreach ($datas as $data): ?>
								    	<?php if( esc_html($data[0]) != "" ): ?>
									 		<tr>
												<?php if( empty(esc_html($data[1])) ): ?>
										 			<th class="cat" colspan="2"><?php echo esc_html($data[0]); ?></th>
										 		<?php else: ?>
										 			<th><?php echo esc_html($data[0]); ?></th>
										 			<td><ul><?php echo $data[1]; ?></ul></td>
										 		<?php endif; ?>
									 		</tr>
									 	<?php endif; ?>
								    <?php endforeach; ?>
								</table>
<!-- 
								<p class="cat">・Pro Tools</p>
								<table>
									<tr>
										<th>System</th>
										<td>HDX2</td>
									</tr>
									<tr>
										<th>Software Version</th>
										<td>2018.7</td>
									</tr>
									<tr>
										<th>Audio Interface</th>
										<td>Avid HD I/O</td>
									</tr>
									<tr>
										<th>Computer</th>
										<td>Apple Mac Pro (Late 2013)</td>
									</tr>
									<tr>
										<th>Processer</th>
										<td>3.5GHz 6-Core </td>
									</tr>
									<tr>
										<th>Memory</th>
										<td>32GB</td>
									</tr>
									<tr>
										<th>OS Version</th>
										<td>OS X 10.12.6</td>
									</tr>
									<tr>
										<th>Physical controller</th>
										<td>PRESONUS FaderPort</td>
									</tr>
								</table>
 -->
							</div>
							<div class="equipments-block table right">
								<?php
								$datas = TablePress::$controller->model_table->load(28);
								$datas = $datas['data'];
								?>
								<table>
								    <?php foreach ($datas as $data): ?>
								    	<?php if( esc_html($data[0]) != "" ): ?>
									 		<tr>
												<?php if( empty(esc_html($data[1])) ): ?>
										 			<th class="cat" colspan="2"><?php echo esc_html($data[0]); ?></th>
										 		<?php else: ?>
										 			<th><?php echo esc_html($data[0]); ?></th>
										 			<td><ul><?php echo $data[1]; ?></ul></td>
										 		<?php endif; ?>
									 		</tr>
									 	<?php endif; ?>
								    <?php endforeach; ?>
								</table>
<!-- 
								<table>
									<tr>
										<th>Monitor Controler</th>
										<td>GRACE design m905</td>
									</tr>
									<tr>
										<th>Monitor Speaker</th>
										<td>
											<ul>
												<li>ADAM S2V</li>
												<li>FOCAL Twin6 Be</li>
												<li>YAMAHA NS-10M (w/PC1002)</li>
												<li>Victor EX AK-1</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Headphone Amplifier</th>
										<td>Fostex HP-A8</td>
									</tr>
								</table>
 -->
<!-- 
								<p class="cat" style="margin-top: 20px;">・5.1ch Surround（ ※Option ）</p>
								<table>
									<tr>
										<th>Monitor Controler</th>
										<td>Martinsound MultiMAX</td>
									</tr>
									<tr>
										<th>Monitor Speaker</th>
										<td>
											<ul>
												<li>FOCAL CMS 65</li>
												<li>FOCAL CMS SUB</li>
											</ul>
										</td>
									</tr>
								</table>
 -->
							</div>
						</div>
					</div>
					<div id="plugins" class="tab-content-child">
						<div id="plugins-area">
							<div class="plugins-block table left">
								<?php
								$datas = TablePress::$controller->model_table->load(31);
								$datas = $datas['data'];
								?>
								<table>
								    <?php foreach ($datas as $data): ?>
								    	<?php if( esc_html($data[0]) != "" ): ?>
									 		<tr>
												<?php if( empty(esc_html($data[1])) ): ?>
										 			<th class="cat" colspan="2"><?php echo esc_html($data[0]); ?></th>
										 		<?php else: ?>
										 			<th><?php echo esc_html($data[0]); ?></th>
										 			<td><ul><?php echo $data[1]; ?></ul></td>
										 		<?php endif; ?>
									 		</tr>
									 	<?php endif; ?>
								    <?php endforeach; ?>
								</table>
<!-- 
								<table>
									<tr>
										<th>Waves</th>
										<td>
											<ul>
												<li>Mercury V10</li>
												<li>SSL 4000 Collection</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Universal Audio</th>
										<td>UAD-2 OCTO</td>
									</tr>
									<tr>
										<th>Avid</th>
										<td>
											<ul>
												<li>Aphex Aural Exciter and Big Bottom</li>
												<li>Eleven</li>
												<li>Focusrite d2/d3</li>
												<li>Impact</li>
												<li>Moogerfooger Bundle</li>
												<li>Pultec Bundle</li>
												<li>Reverb One</li>
												<li>ReVibe</li>
												<li>Smack!</li>
												<li>Space </li>
												<li>Tel-Ray Variable Delay</li>
												<li>Voce Bundle</li>
												<li>X-Form</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Antares</th>
										<td>Auto-Tune 7</td>
									</tr>
									<tr>
										<th>Celemony</th>
										<td>Melodyne 4</td>
									</tr>
									<tr>
										<th>Empirical Lab</th>
										<td>AROUSOR</td>
									</tr>
									<tr>
										<th>Eventide</th>
										<td>Tverb</td>
									</tr>
									<tr>
										<th>Fabfilter</th>
										<td>FX Bundle</td>
									</tr>
									<tr>
										<th>IK Multimedia</th>
										<td>
											<ul>
												<li>Total Studio MAX</li>
												<li>T-RackS MAX</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Kush Audio</th>
										<td>Pusher</td>
									</tr>
									<tr>
										<th>Lexicon</th>
										<td>PCM Native Reverb Bundle</td>
									</tr>
									<tr>
										<th>Massenburg DesignWorks</th>
										<td>MDW EQ3</td>
									</tr>
								</table>
-->
							</div>
							<div class="plugins-block table right">
								<?php
								$datas = TablePress::$controller->model_table->load(32);
								$datas = $datas['data'];
								?>
								<table>
								    <?php foreach ($datas as $data): ?>
								    	<?php if( esc_html($data[0]) != "" ): ?>
									 		<tr>
												<?php if( empty(esc_html($data[1])) ): ?>
										 			<th class="cat" colspan="2"><?php echo esc_html($data[0]); ?></th>
										 		<?php else: ?>
										 			<th><?php echo esc_html($data[0]); ?></th>
										 			<td><ul><?php echo $data[1]; ?></ul></td>
										 		<?php endif; ?>
									 		</tr>
									 	<?php endif; ?>
								    <?php endforeach; ?>
								</table>
<!-- 
								<table>
									<tr>
										<th>Massey Plugins</th>
										<td>
											<ul>
												<li>CT5</li>
												<li>De:Esser</li>
												<li>TapeHead saturation</li>
												<li>L2007</li>
												<li>THC</li>
												<li>Vt3</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>McDSP</th>
										<td>
											<ul>
												<li>Analog Channel Native v6</li>
												<li>CompressorBank HD v6</li>
												<li>Filter Bank HD v6</li>
												<li>FutzBox Native v6</li>
												<li>ML4000 Native v6</li>
												<li>Revolver Native v6</li>
												<li>4030 Retro Comp HD v6</li>
												<li>4020 Retro EQ HD v6</li>
												<li>6030 Ultimate Comp HD v6</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Native Instruments</th>
										<td>Supercharger</td>
									</tr>
									<tr>
										<th>Nomad Factory</th>
										<td>
											<ul>
												<li>Echoes</li>
												<li>Magnetic</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Plugin Alliance</th>
										<td>
											<ul>
												<li>bx_saturator V2</li>
												<li>elysia museq</li>
												<li>SPL Passeq</li>
												<li>SPL TwinTube Processor</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Relab Development</th>
										<td>
											<ul>
												<li>LX480 Complete</li>
												<li>VSR S24</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Slate Digital</th>
										<td>Trigger 2</td>
									</tr>
									<tr>
										<th>Softube</th>
										<td>
											<ul>
												<li>Abbey Road Studios Brilliance Pack</li>
												<li>Saturation Knob</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Soundtoys</th>
										<td>
											<ul>
												<li>SoundToys V5</li>
												<li>MicroShift</li>
												<li>Little MicroShift</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>iZotope</th>
										<td>iZotope RX5</td>
									</tr>
									<tr>
										<th>Valhalla DSP</th>
										<td>ValhallaRoom</td>
									</tr>
								</table>
-->
							</div>
						</div>
					</div>
					<div id="floormap" class="tab-content-child">
						<div id="floormap-area">
							<div class="floormap-block">
								<?php 
									$image = SCF::get('floormap_ab' , 102);
									$image = wp_get_attachment_image_src($image,'large');
									$image_url = esc_url($image[0]);
								 ?>
								<img src="<?php echo $image_url; ?>" alt="">
							</div>
						</div>
					</div>
				</div><!-- studio-block-equipments -->
			</div>
		</div>

		<div id="studioc" class="tab-content">
			<div class="studio-block-container">
				<div id="studio-block-image" class="studio-block print">
					<div class="studio-block-child desc">
					</div>
				</div><!-- studio-block-img -->
				<div id="studio-block-equipments" class="studio-block">
					<div class="page-tab-child">
						<ul class="tabs-child">
							<li><a href="#equipments-c">Equipments</a></li>
							<li><a href="#plugins-c">Plug-ins</a></li>
							<li><a href="#floormap-c">Floor Map</a></li>
							<li><a href="<?php echo home_url(); ?>/company#access">Access to Studio</a></li>
							<div class="print-button">Print Out</div>
						</ul>
					</div>
					<div id="equipments-c" class="tab-content-child">
						<div id="equipments-area">
							<div class="equipments-block table left">
								<?php
								$datas = TablePress::$controller->model_table->load(33);
								$datas = $datas['data'];
								?>
								<table>
								    <?php foreach ($datas as $data): ?>
								    	<?php if( esc_html($data[0]) != "" ): ?>
									 		<tr>
												<?php if( empty(esc_html($data[1])) ): ?>
										 			<th class="cat" colspan="2"><?php echo esc_html($data[0]); ?></th>
										 		<?php else: ?>
										 			<th><?php echo esc_html($data[0]); ?></th>
										 			<td><ul><?php echo $data[1]; ?></ul></td>
										 		<?php endif; ?>
									 		</tr>
									 	<?php endif; ?>
								    <?php endforeach; ?>
								</table>
<!-- 
								<p class="cat">・Pro Tools</p>
								<table>
									<tr>
										<th>System</th>
										<td>HDX2</td>
									</tr>
									<tr>
										<th>Software Version</th>
										<td>2019.12.0</td>
									</tr>
									<tr>
										<th>Audio Interface</th>
										<td>Avid HD I/O</td>
									</tr>
									<tr>
										<th>Computer</th>
										<td>Apple Mac Pro (Late 2013)</td>
									</tr>
									<tr>
										<th>Processer</th>
										<td>3GHz 8-core</td>
									</tr>
									<tr>
										<th>Memory</th>
										<td>32GB</td>
									</tr>
									<tr>
										<th>OS Version</th>
										<td>OS Mojave 10.14.6</td>
									</tr>
								</table>
 -->
							</div>
							<div class="equipments-block table right">
								<?php
								$datas = TablePress::$controller->model_table->load(34);
								$datas = $datas['data'];
								?>
								<table>
								    <?php foreach ($datas as $data): ?>
								    	<?php if( esc_html($data[0]) != "" ): ?>
									 		<tr>
												<?php if( empty(esc_html($data[1])) ): ?>
										 			<th class="cat" colspan="2"><?php echo esc_html($data[0]); ?></th>
										 		<?php else: ?>
										 			<th><?php echo esc_html($data[0]); ?></th>
										 			<td><ul><?php echo $data[1]; ?></ul></td>
										 		<?php endif; ?>
									 		</tr>
									 	<?php endif; ?>
								    <?php endforeach; ?>
								</table>
<!-- 
								<table>
									<tr>
										<th>Monitor Controler</th>
										<td>GRACE design m905</td>
									</tr>
									<tr>
										<th>Monitor Speaker</th>
										<td>
											<ul>
<li>FOCAL Twin6 Be</li>
<li>Victor EX-AK1</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Cue System</th>
										<td>CONISIS COM1805</td>
									</tr>
								</table>
								<p class="cat" style="margin-top: 20px;">・5.1ch Surround（ ※Option ）</p>
								<table>
									<tr>
										<th>Monitor Controler</th>
										<td>Martinsound MultiMAX</td>
									</tr>
									<tr>
										<th>Monitor Speaker</th>
										<td>
											<ul>
<li>ADAM S2V</li>
<li>Sub10 MK2</li>
											</ul>
										</td>
									</tr>
								</table>
								<p class="cat" style="margin-top: 20px;">Microphone</p>
								<table>
									<tr>
										<th>Condenser</th>
										<td>
											<ul>
<li>Neumann U67</li>
<li>TONEFLAKE T47</li>
											</ul>
										</td>
									</tr>
									<tr>
										<th>Dynamic</th>
										<td>
											<ul>
<li>Shure Beta56</li>
<li>Sennheiser e602Ⅱ</li>
<li>Sennheiser e609</li>
											</ul>
										</td>
									</tr>
								</table>
 -->
							</div>
						</div>
					</div>
					<div id="plugins-c" class="tab-content-child">
						<div id="plugins-area">
							<div class="plugins-block table left">
								<?php
								$datas = TablePress::$controller->model_table->load(35);
								$datas = $datas['data'];
								?>
								<table>
								    <?php foreach ($datas as $data): ?>
								    	<?php if( esc_html($data[0]) != "" ): ?>
									 		<tr>
												<?php if( empty(esc_html($data[1])) ): ?>
										 			<th class="cat" colspan="2"><?php echo esc_html($data[0]); ?></th>
										 		<?php else: ?>
										 			<th><?php echo esc_html($data[0]); ?></th>
										 			<td><ul><?php echo $data[1]; ?></ul></td>
										 		<?php endif; ?>
									 		</tr>
									 	<?php endif; ?>
								    <?php endforeach; ?>
								</table>
<!-- 
								<table>
									<tr>
										<th>Avid</th>
										<td>MDW Hi-Reso Parametric EQ5 </td>
									</tr>
									<tr>
										<th>Antares</th>
										<td>Auto-Tune Pro</td>
									</tr>
									<tr>
										<th>Celemony</th>
										<td>MELODYNE 4 STUDIO</td>
									</tr>
									<tr>
										<th>Empirical Lab</th>
										<td>AROUSOR</td>
									</tr>
									<tr>
										<th>Fabfilter</th>
										<td>FX Bundle</td>
									</tr>
									<tr>
										<th>IK Multimedia</th>
										<td>Total Studio 2 MAX</td>
									</tr>
									<tr>
										<th>iZotope</th>
										<td>
											<ul>
<li>iZotope RX7 Standsrd</li>
<li>Ozone 9 Advanced</li>
											</ul>
										</td>
									</tr>
								</table>
 -->
							</div>
							<div class="plugins-block table right">
								<?php
								$datas = TablePress::$controller->model_table->load(36);
								$datas = $datas['data'];
								?>
								<table>
								    <?php foreach ($datas as $data): ?>
								    	<?php if( esc_html($data[0]) != "" ): ?>
									 		<tr>
												<?php if( empty(esc_html($data[1])) ): ?>
										 			<th class="cat" colspan="2"><?php echo esc_html($data[0]); ?></th>
										 		<?php else: ?>
										 			<th><?php echo esc_html($data[0]); ?></th>
										 			<td><ul><?php echo $data[1]; ?></ul></td>
										 		<?php endif; ?>
									 		</tr>
									 	<?php endif; ?>
								    <?php endforeach; ?>
								</table>
<!-- 
								<table>
									<tr>
										<th>Lexicon</th>
										<td>PCM Native Reverb Plug-in Bundle</td>
									</tr>
									<tr>
										<th>Relab Development</th>
										<td>Reverb Bundle 2</td>
									</tr>
									<tr>
										<th>Slate Digital</th>
										<td>Trigger 2</td>
									</tr>
									<tr>
										<th>Soundtoys</th>
										<td>SoundToys V5 Bundle</td>
									</tr>
									<tr>
										<th>Universal Audio</th>
										<td>UAD-2 OCTO CORE</td>
									</tr>
									<tr>
										<th>Waves</th>
										<td>
											<ul>
<li>Mercury V11</li>
<li>SSL 4000 Collection</li>
											</ul>
										</td>
									</tr>
								</table>
 -->
							</div>
						</div>
					</div>
					<div id="floormap-c" class="tab-content-child">
						<div id="floormap-area">
							<div class="floormap-block">
								<?php 
									$image = SCF::get('floormap_c' , 102);
									$image = wp_get_attachment_image_src($image,'large');
									$image_url = esc_url($image[0]);
								 ?>
								<img src="<?php echo $image_url; ?>" alt="">
							</div>
						</div>
					</div>
				</div><!-- studio-block-equipments -->
			</div>
		</div>


	</div>
</section><!-- company-area fin. -->


<?php get_footer(); ?>