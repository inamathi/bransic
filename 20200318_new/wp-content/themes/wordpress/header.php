<!DOCTYPE html>
<html lang="ja" id="<?php if ( is_home() || is_front_page() ) : ?>top<?php endif; ?>">
<head>
	<meta charset="UTF-8">
<?php if ( is_home() || is_front_page() ) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=yes">
<?php endif; ?>
<meta property="og:title" content="<?php if (is_single() ) { ?><?php the_title(); ?> | <?php } ?>BRANSIC">
<meta property="og:type" content="<?php if ( is_home() || is_front_page() ) : ?>blog<?php else:  ?>article<?php endif; ?>">
<meta property="og:url" content="<?php $protocol = is_ssl() ? 'https' : 'http'; $uri = $protocol . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; echo $uri;?>">
<meta property="og:image" content="<?php echo og_image(); ?>">
<meta property="og:site_name" content="<?php if (is_single() ) { ?><?php the_title(); ?> | <?php } ?>BRANSIC">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@BRANSIC">
<!-- ファビコン -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico"> 
<!-- スマホ用アイコン -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-180x180.png">
<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/origin.css?ver='.date('YmdGis', filemtime(get_template_directory().'/css/origin.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver='.date('YmdGis', filemtime(get_template_directory().'/css/style.css')); ?>" rel="stylesheet">
<!-- webフォント -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500&display=swap" rel="stylesheet">
<!-- フォントアイコン -->
<link href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" rel="stylesheet">
<!-- swiper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
<!-- AOS -->
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<header class="print">
	<div id="nav-area">
		<div class="nav-block">
			<ul>
				<li class="logo">
					<a href="<?php echo home_url(); ?>/"><img src="https://bransic.net/20200318_new/wp-content/uploads/2021/01/IMG_1268.png" alt=""></a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/information">Information</a>
				</li>
				<li class="acordion-creator">
					<p>Creator</p>
					<div class="acordion-menu acordion-menu-creator">
						<ul>
							<li><a href="<?php echo home_url(); ?>/composer-musician">Composer・Musician・Producer</a></li>
						</ul>
					</div>
				</li>
				<li class="acordion-studio">
					<p>Artist</p>
					<div class="acordion-menu acordion-menu-studio">
						<ul>
							<?php foreach (get_posts(['post_type' => 'artist']) as $p): ?>
								<li><a href="<?php echo get_permalink($p); ?>"><?php echo $p->post_title; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/company">Company</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/contact">Contact</a>
				</li>
				<span class="sns">
					<li>
						<a href="https://twitter.com/BransicL" target="blank"><i class="fab fa-twitter"></i></a>
					</li>
				</span>
				<li>
					<a href="https://signsound.net"><img src="https://bransic.net/20200318_new/wp-content/uploads/2021/01/logo-relation_new.png" alt="" class="logo-relation"></a>
				</li>
			</ul>
		</div>
	</div>
</header>

<section id="main-area">
	<div class="container">