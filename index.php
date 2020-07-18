

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
	<link href="<?php echo get_template_directory_uri(); ?>/css/style_particle.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	<!--js-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/base.js"></script>

</head>


<body>

<div class="wrap">


<!--ーーーーーーーーーーーーーーーー
ナビ
ーーーーーーーーーーーーーーーー-->
    <div id="top-head">
        <div class="inner">
            <div id="mobile-head">
				<!--ーーーーーーーーーーーーーーーー
					常に表示されるもの
				ーーーーーーーーーーーーーーーー-->	
				<a class="logo" href="/">
					<!--Logo-->
					<img src="<?php echo get_template_directory_uri(); ?>/img/RAUM_txt.png" alt="Raum">
				</a>
				<!--パーティクル-->
				<div class="container">
					<div class="wrapper">
						<div class="particle"></div>
						<div class="particle"></div>
						<div class="particle"></div>
						<div class="particle"></div>
						<div class="particle"></div>
						<div class="particle"></div>
						<div class="particle"></div>
						<div class="particle"></div>
					</div>
				</div>
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
				<div id="page_item5" class="return">
					<div class="Top_page5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat5.jpg" alt=””> 
						<div class="sub_ttl">
							<h1><span>S</span>tep<span>4</span></h1>
							<p>トリートメントで
							<br>芯からしなやか綺麗な髪へ
							<br>生まれ変わる</p>
						</div>
					</div>
				</div>
				<!--新しい画像4-->
				<div id="page_item4" class="return">
					<div class="Top_page4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat4.jpg" alt=””> 
						<div class="sub_ttl">
							<h1><span>S</span>tep<span>3</span></h1>
							<p>自宅でできる簡単ケア方法
							<br>を丁寧にお伝えします</p>
						</div>
					</div>
				</div>
				<!--新しい画像3-->
				<div id="page_item3" class="return">
					<div class="Top_page3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat3.jpg" alt=””>
						<div class="sub_ttl">
							<h1><span>S</span>tep<span>2</span></h1>
							<p>似合わせカット</p>
							<p>あなたの骨格から
							<br>似合う髪型をご提案させて頂きます。</p>
						</div>
					</div>
				</div>
				<!--新しい画像2-->
				<div id="page_item2" class="return">
					<div class="Top_page2">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat2.jpg" alt=””>
						<div class="sub_ttl">
							<h1><span>S</span>tep<span>1</span></h1>
							<p>まずはカウンセリング</p>
							<p>髪のお悩み教えてください</p>
						</div>
					</div>
				</div>
				<!--新しい画像1-->
				<div id="page_item1" class="return">
					<div class="Top_page1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat1.jpg" alt=””>
						<div class="col_ttl">
							<h1><span>B</span>eauty <span>L</span>abo</h1>
							<p>なりたい髪に</p>
							<p>なりたいあなたへ</p>
						</div>
					</div>
				</div>
			</div>
        </div>
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

