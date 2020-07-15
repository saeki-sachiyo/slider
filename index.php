

<!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Build with Beauty</title>

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<!--フォントオーサム-->
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<!--スタイルシート-->
	<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

	<!--js-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/base.js"></script>

</head>


<body>

<div class="wrap">


<!--ーーーーーーーーーーーーーーーー
ナビ
ーーーーーーーーーーーーーーーー-->
    <header id="top-head">
        <div class="inner">
            <div id="mobile-head">				
				<a class="logo" href="/">
					<!--Logo-->
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Build with Beauty">
				</a>
				<!--横の丸いやつ-->
                <div id="nav-toggle">
					<!--ページ-->
                    <div id="page1">

                    </div>
					<!--ページ-->
					<div id="page2">

					</div>
					<div id="page3">

					</div>
					<div id="page4">

					</div>
					<div id="page5">

					</div>
                </div>
			</div>
			<div class="Top_page">
				<!--ページは古い順に書く-->
				<!--新しい画像5-->
				<div id="page_item5">
					<div class="Top_page5">
						<p>5</p>
					</div>
				</div>
				<!--新しい画像4-->
				<div id="page_item4">
					<div class="Top_page4">
						<p>4</p>
					</div>
				</div>
				<!--新しい画像3-->
				<div id="page_item3">
					<div class="Top_page3">
						<p>3</p>
					</div>
				</div>
				<!--新しい画像2-->
				<div id="page_item2">
					<div class="Top_page2">
						<p>2</p>
					</div>
				</div>
				<!--新しい画像1-->
				<div id="page_item1">
					<div class="Top_page1">
						<p>1</p>
					</div>
				</div>
			</div>
        </div>
	</header>

<!--ーーーーーーーーーーーーーーーー
	Top
ーーーーーーーーーーーーーーーー-->
	<section id="topview">
		<div class="wrap_topview">
			<div class="img_topview">
				<!--Top画像-->
			</div>
			<div class="area_topview">
				<!--タイトル-->
				<h2><span>B</span>uild with Beauty</h2>
				<hr class="hr_top">
				<p class="item1_topview">
					<img src="<?php echo get_template_directory_uri(); ?>/img/num1.png" alt="Build with Beauty">
					<span>美容師</span>という<span>仕事</span>をもっと<span>自由</span>に
				</p>
				<p class="item2_topview">
					<img src="<?php echo get_template_directory_uri(); ?>/img/num2.png" alt="Build with Beauty">
					<span>美容師</span>という<span>仕事</span>でもっと<span>裕福</span>に
				</p>
				<p class="item3_topview">
					<img src="<?php echo get_template_directory_uri(); ?>/img/num3.png" alt="Build with Beauty">
					<span>美容師</span>という<span>仕事</span>がもっと<span>素敵</span>に
				</p>
				<hr class="hr_bottom">
			</div>
			<a href="/">
				<span>
				</span>
			</a>
		</div>
	</section>

<!--ーーーーーーーーーーーーーーーー
Footer
ーーーーーーーーーーーーーーーー-->
	<footer id="footer">
		<div class="wrap_footer">
			<div class="footer_logo">
				<!--Logo画像-->
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_bottom.png" alt="Build with Beauty"> 
			</div>
			<nav class="footer_area">
				<ul>
					<li>
						<a href="/">
							Top
							<br><span  class="nav_sub">トップ<span>
						</a>
					</li>
					<li>
						<a href="/">
							NEWS
							<br><span  class="nav_sub">お知らせ<span>
						</a>
					</li>
					<li>
						<a href="/">
						TO CLIENT
							<br><span  class="nav_sub">企業様・サロンオーナー様へ<span>
						</a>
					</li>
					<li>
						<a href="/">
							HAIRDRESSER
							<br><span  class="nav_sub">美容師さんへ<span>
						</a>
					</li>
					<li>
						<a href="/">
							COMPANY
							<br><span  class="nav_sub">会社概要<span>
						</a>
					</li>
					<li>
						<a href="/">
							CONTACT
							<br><span  class="nav_sub">お問い合わせ<span>
						</a>
					</li>
				</ul>
			</nav>
		</div>

		<!--ーーーーーーーーーーーーーーーー
		コピーライト
		ーーーーーーーーーーーーーーーー-->
		<div>
			<div class="copy">
				<p>&copy; 2019 Test.All Rights Reserved</p>
			</div>
		</div>
	</footer>
</body>
</html>

