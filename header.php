<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<title><?php echo get_the_title( $ID ); ?></title>
	<meta name="description" content="">

	<meta property="og:title" content="TF-30">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://example.com/">
	<meta property="og:image" content="https://example.com/img/ogp.png">
	<meta property="og:site_name" content="TF-30">
	<meta property="og:description" content="">
	<meta name="twitter:card" content="summary_large_image">

	<!-- 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
    <link rel="stylesheet" href="./css/style.css"> 
    -->
    <!-- ↓phpに置き換える -->
    

	<link rel="icon" href="./img/icon-home.png">
	<?php wp_head(); ?>
</head>

<body>

	<!-- header -->
	<header id="header">
		<div class="inner">
		
			
<!--
<h1 class="header-logo"><a href="/">blog title</a></h1>
<div class="header-sub">サブタイトルが入りますサブタイトルが入ります</div>
ここを動的に置き換える
-->
<?php if (is_home() || is_front_page() ) : //トップページではロゴをh1に、それ以外のページではdivに。 ?>
<h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1><!-- /header-logo -->
<?php else : ?>
<div class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div><!-- /header-logo -->
<?php endif; ?>
<div class="header-sub"><?php bloginfo('description'); //ブログのdescriptionを表示 ?></div><!-- /header-sub -->

			<!-- drawer -->
			<div class="drawer">
				<div class="drawer-icon">
					<span class="drawer-open"><i class="fas fa-bars"></i></span><!-- /drawer-open -->
					<span class="drawer-close"><i class="fas fa-times"></i></span><!-- drawer-close -->
				</div><!-- /drawer-icon -->

				
				<!-- drawer-content -->
				<div class="drawer-content">
				<?php
				//.drawer-navを置き換えて、スマホ用メニューを動的に表示する
				wp_nav_menu(
				array(
				'depth' => 1,
				'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
				'container' => 'nav',
				'container_class' => 'drawer-nav',
				'menu_class' => 'drawer-list',
				)
				);
				?>
				</div><!-- /drawer-content -->
			</div><!-- /drawer -->

		</div><!-- /inner -->
	</header><!-- /header -->

	
	<!-- header-nav -->
	<nav class="header-nav">
	<div class="inner">
	<?php
	wp_nav_menu(
	//.header-listを置き換えて、PC用メニューを動的に表示する
	array(
	'depth' => 1,
	'theme_location' => 'global', //グローバルメニューをここに表示すると指定
	'container' => 'false',
	'menu_class' => 'header-list',
	)
	);
	?>
	</div><!-- /inner -->
	</nav><!-- header-nav -->