<!--
Template Name: Access
-->

<!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>orion-cafe</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

<!-- swiperの読み込みCDNを使用 -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
	<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
</head>


<body>
<div class="wrap">
	<!-- ナビ -->
    <header id="top-head">
        <div class="inner">
            <div id="mobile-head">
                <h1 class="logo">Logo</h1>
                <div id="nav-toggle">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav id="global-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Access</a></li>
                </ul>
            </nav>
        </div>
    </header>


	<!-- Topエリア -->
	<section id="topview">
		<div class="topview">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/access_Top.png" alt="ひこぼし アクセス">
			</div>
			<div class="sub-text">
				<p>Access</p>
			</div>
		</div>
	</section>

	<!-- Access -->
	<div id="info">
		<div class="ttl_com m-auto text-center">
			<h2>Access</h2>
			<div class="hr">
				<img src="<?php echo get_template_directory_uri(); ?>/img/star_hr.png" alt="line">
			</div>
		</div>
		<div class="info row">
			<div class="access_left col-4">
				<div class="access_txt text-center">
					<h4 class="py-3">陽湖星「ひこぼし」</h4> 
					<p>住所：愛知県名古屋市</p>
					<p>電話番号：090-999-9999</P>
					<p>定休日：月曜</P>
					<p>【営業時間】<br>
					モーニング 8:00～11:00</br>
					カフェ 14:30〜18:00</P>
					<p>駐車場100台</p>
				</div>
			</div>
			<div class="access_right col-8 p-0">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Access.jpg" alt="ひこぼしアクセス">
			</div>
		</div>
	</div>

	<section id="map" class="sec">
		<div class="ttl_com m-auto text-center">
			<h2>Map</h2>
			<div class="hr">
				<img src="<?php echo get_template_directory_uri(); ?>/img/star_hr.png" alt="line">
			</div>
		</div>
		<div class="text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4265663082974!2d136.879348215276!3d35.1709193653964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x888e6049a94311f3!2z5ZCN5Y-k5bGL44Oe44Oq44Kq44OD44OI44Ki44K944K344Ki44Ob44OG44Or!5e0!3m2!1sja!2sjp!4v1588037952651!5m2!1sja!2sjp" width="130%" height="200%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe></div>
	</section>

	<!--- Footer -->
	<footer>
	<div class="container-fluid p-0 m-0">
		<div class="row text-center p-0 m-0">
			<div class="col-12">
				<hr class="light">
				<h5>&copy; orion-cafe.com</h5>
			</div>
		</div>
	</div>
	</footer>
<div>

</body>
</html>
