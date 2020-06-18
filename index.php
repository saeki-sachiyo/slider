<!--
Template Name: Top_cafe
-->

<!DOCTYPE html>

<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>  塾</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

<!-- swiperの読み込みCDNを使用 -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
	<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
	<script src="https://unpkg.com/swiper/js/swiper.js"></script>
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
                    <li><a href="#">コース</a></li>
                    <li><a href="#">合格・体験記</a></li>
                    <li><a href="#">特徴</a></li>
                    <li><a href="#">体験お申し込み</a></li>
                </ul>
            </nav>
        </div>
    </header>


	<!-- Topエリア -->
	<section id="topview">
		<div class="topview">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/top.jpg" alt="">
			</div>
			<div class="top_ttl">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ttl.png" alt="">
			</div>
			<div class="top_text">
				<p>一人ひとりに夢があります。<br>
					でもどう叶えたらいいか分からない。</p>
				<p>	自分は今、どこにいるのか。<br>
					この先、どちらへ進めば良いのか。</p>
				<p>でも、ゴールまでの道筋を明確にして、<br>
				問題を解決し、前に進めば、夢は現実になります。</p>
					
				<p>そのために「Raum」では一人ひとりをサポートします。</p>

				<p>夢を夢で終わらせない。</p>
			</div>
		</div>
	</section>

	<!-- News -->
	<section id="news" class="sec">
		<div class="comttl text-center">
			<p>
				お知らせ
			</p>
		</div>
		<div class="news_txt text-center">	
			<div class="p-4">
				<p >2020/01/24</p>
				<p>説明会の日程をUPしました
				</p>
			</div>
			<div class="p-4">
				<p >2019/９/24</p>
				<p>勉強合宿のお知らせ
				</p>
			</div>
		</div>
	</section>

	<!-- feature -->
	<section id="feature" class="sec">
		<div class="point_all">
			<div class="point">
				<div class="comttl text-center">
					<p>
						成長できる4つの理由
					</p>
				</div>
			</div>
			<div  class="point_cont row">
				<div  class="col-sm-6 col-12 text-right p-0">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/point1.jpg" alt="" class="img-fluid">
					</div>
					<div>
						<p class="point_txt">
							自信があるからこその成績保証 >>
						</p>
					</div>
				</div>
				<div  class="col-sm-6 col-12 p-0">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/point3.jpg" alt="" class="img-fluid">
					</div>
					<div>
						<p class="point_txt">
							勉強のやり方も徹底指導 >>
						</p>
					</div>
				</div>
			</div>
			<div  class="point_cont row">
				<div  class="col-sm-6 col-12 text-right p-0">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/point4.jpg" alt="" class="img-fluid">
					</div>
					<div>
						<p class="point_txt">
							勉強だけではなく人生を教える >>
						</p>
					</div>
				</div>
				<div  class="col-sm-6 col-12 p-0">
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/point2.jpg" alt="" class="img-fluid">
					</div>
					<div>
						<p class="point_txt">
							個性を尊重する教育 >>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- corse -->
	<section id="corse" class="sec">
		<div class="corse_all">
			<div class="corse">
				<div class="comttl text-center">
					<p>
						コース
					</p>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-sm-4 col-12 my-3 fadein">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/corse2.jpg">
						<div class="card-body">
							<h4 class="card-title">中学生</h4>
							<a href="#lanch" class="btn btn-outline-secondary">詳細</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-12 my-3 fadein">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/corse1.jpg">
						<div class="card-body">
							<h4 class="card-title">高校生</h4>
							<a href="#tea" class="btn btn-outline-secondary">詳細</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-12 my-3 fadein">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/corse3.jpg">
						<div class="card-body">
							<h4 class="card-title">個別</h4>
							<a href="#party" class="btn btn-outline-secondary">詳細</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 実績 -->
	<section id="grade" class="sec">
		<div class="grade_all">
			<div class="grade">
				<div class="comttl text-center">
					<p>
						Raumで成績UP
					</p>
				</div>
			</div>
			<!-- Slider全体のコンテナ -->
			<div class="swiper-container pt-5">
				<!-- Sliderの内包コンテナ -->
				<div class="swiper-wrapper">
					<!-- Slideさせたいコンテンツ -->
					<div class="grade_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/girl.jpg">
						<div>
							<p class="grade_txt1 text-center">中学1年<p>
							<p class="grade_txt2 text-center">期末<span class="px-2">86点</span>UP</p>
						</div>
					</div>
					<div class="grade_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/boy.jpg">
						<div>
							<p class="grade_txt1 text-center">高校2年<p>
							<p class="grade_txt2 text-center">期末<span class="px-2">120点</span>UP</p>
						</div>
					</div>
					<div class="grade_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/girl2.jpg">
						<div>
							<p class="grade_txt1 text-center">合格<p>
							<p class="grade_txt2 text-center"><span class="px-2 school">名古屋大学</span></p>
						</div>
					</div>
					<div class="grade_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/girl3.jpg">
						<div>
							<p class="grade_txt1 text-center">合格<p>
							<p class="grade_txt2 text-center"><span class="px-2">岐阜大学</span></p>
						</div>
					</div>
					<div class="grade_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/girl4.jpg">
						<div>
							<p class="grade_txt1 text-center">中学1年<p>
							<p class="grade_txt2 text-center">期末<span class="px-2">80点</span>UP</p>
						</div>
					</div>
					<div class="grade_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/boy2.jpg">
						<div>
							<p class="grade_txt1 text-center">高校1年<p>
							<p class="grade_txt2 text-center">期末<span class="px-2">130点</span>UP</p>
						</div>
					</div>
				</div>
				<!-- ページネーション（※省略可） 
				<div class="swiper-pagination"></div>-->
				<!-- ナビゲーションボタン（※省略可） 
				<div class="swiper-button-prev"></div> 
				<div class="swiper-button-next"></div>--> 
				<!-- スクロールバー（※省略可） --> 
				<!-- <div class="swiper-scrollbar"></div>  -->
			</div>
			<div class="readmore text-center mt-5">
				<a href="#" class="btn btn-outline-secondary px-5 py-3">もっと詳しく見る＞＞</a>
			</div>
		</div>
	</section>

	<!-- 講師紹介 -->
	<section id="teacher" class="sec">
		<div class="teacher_all">
			<div class="teacher">
				<div class="comttl text-center">
					<p>
						講師紹介
					</p>
				</div>
			</div>
			<!-- Slider全体のコンテナ -->
			<div class="swiper-container pt-5">
				<!-- Sliderの内包コンテナ -->
				<div class="swiper-wrapper">
					<!-- Slideさせたいコンテンツ -->
					<div class="teacher_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/T1.jpg">
						<div>
							<p class="teacher_txt1 text-center">山田太郎<p>
						</div>
					</div>
					<div class="teacher_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/T2.jpg">
						<div>
							<p class="teacher_txt1 text-center">吉田しゅん<p>
						</div>
					</div>
					<div class="teacher_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/T3.jpg">
						<div>
							<p class="teacher_txt1 text-center">吉村ゆうき<p>
						</div>
					</div>
					<div class="teacher_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/T4.jpg">
						<div>
							<p class="teacher_txt1 text-center">佐藤さとこ<p>
						</div>
					</div>
					<div class="teacher_txt swiper-slide mx-1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/T5.jpg">
						<div>
							<p class="teacher_txt1  text-center">田中由紀子<p>
						</div>
					</div>
				</div>
				<!-- ページネーション（※省略可） 
				<div class="swiper-pagination"></div>-->
				<!-- ナビゲーションボタン（※省略可） 
				<div class="swiper-button-prev"></div> 
				<div class="swiper-button-next"></div>--> 
				<!-- スクロールバー（※省略可） --> 
				<!-- <div class="swiper-scrollbar"></div>  -->
			</div>
			<div class="readmore text-center mt-5">
				<a href="#" class="btn btn-outline-secondary px-5 py-3">もっと詳しく見る＞＞</a>
			</div>
		</div>
	</section>

	<section id="message" class="sec">
		<div class="message_all">
			<div class="message">
				<div class="comttl text-center">
					<p>
						Raumの思い
					</p>
				</div>
			</div>
			<div class="message_txt text-center mx-3">
				<p>
					ただ知識を伝えるだけなら動画のみでも構いません。<br>問題集の添削なら通信教育で十分でしょう。</p>
				<p>	Raumは勉強だけでなく人と人とのコミュニケーションを最も大切にしていきたいと考える学習塾です。<br>そして大事なお子様のやる気を引き出し、そして挑戦する機会を増やしていきます。</p>
				<p>	大人になってからは<br>「コミニケーション能力」「挑戦力」<br>この２つが大事になってきます。<br>だからこそ、大人になってから後悔しないように、<br>２つの能力も一緒に磨いていきます。
				</p>
			</div>
		</div>
	</section>

	<!-- 申し込み -->
	<section id="appli" class="sec">
		<div class="appli">
			<div class="message">
				<div class="comttl text-center">
					<p>
						まずは体験のお申し込みへ
					</p>
				</div>
			</div>
			<div class="info row">
				<div class="appli_left col-12 col-md-4">
				</div>
				<div class="appli_right col-12 col-md-8 p-0">
					<img src="<?php echo get_template_directory_uri(); ?>/img/school.jpg" alt="">
				</div>
				<div class="info_txt text-center">
					<p>2回の体験講座があります。</p>
					<p>Raumでは指導方針、学習方法などについてしっかり納得してからご入塾いただくため、<br>
						また、おためしであってもしっかり学習効果を実感していただきたいと思います。<br>
						そのため2回ほど授業を受けていただいています。</P>
					<div class="readmore text-center mt-5">
						<a href="#" class="btn btn-outline-secondary px-5 py-3">お申し込みはこちら＞＞</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- アクセス -->
	<section id="access" class="sec">
		<div class="access">
			<div class="message">
				<div class="comttl text-center">
					<p>
						アクセス
					</p>
				</div>
			</div>
			<div class="row m-3">
				<div class="access_txt col-sm-4 ml-sm-5 ml-0 text-center">
					<h4 class="py-3">Raum</h4> 
					<p>住所：愛知県名古屋市</p>
					<p>電話番号：090-999-9999</P>
					<p>【開校時間】<br>
					15:00～23:00</P>
				</div>
				<div class="col-sm-7 text-md-left"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4265663082974!2d136.879348215276!3d35.1709193653964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x888e6049a94311f3!2z5ZCN5Y-k5bGL44Oe44Oq44Kq44OD44OI44Ki44K944K344Ki44Ob44OG44Or!5e0!3m2!1sja!2sjp!4v1588037952651!5m2!1sja!2sjp" width="90%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe></div>
			</div>
		</div>
	</section>

	<!-- 下のボタン -->
	<section id="btnbtm">
		<div class="btnbtm row">
			<div class="btn1 col-6 text-center">
				<a href="#" class="btn">
					<i class="fas fa-envelope"></i>
					体験申し込み
				</a>
			</div>
			<div class="btn2 col-6 text-center">
				<a href="#" class="btn">
					<i class="fab fa-line"></i>
					公式LINE
				</a>
			</div>
		</div>
	</section>


	<!--- Footer -->
	<footer>
		<div class="foot px-0 pt-0 mx-0">
			<div class="row text-center p-0 m-0">
				<div class="col-12">
					<hr class="light">
					<h5>&copy; raumuーschool.com</h5>
				</div>
			</div>
		</div>
	</footer>
<div>

<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // ここからオプション
    loop: true,
	slidesPerView: 2,
	spaceBetween: 0,
	speed:2000,

    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: '.swiper-scrollbar',
	},
	/*自動で動く*/
	autoplay: {
		delay:0,
		freeMode:true,
	},

  	/*画面が640以上の時にこうする*/
  	breakpoints: {
   		640: {
   	 	slidesPerView: 5,
    	spaceBetween: 0
    	}
  	} 
  })

  $(function(){
		$(window).scroll(function (){
			$('.fadein').each(function(){
				var elemPos = $(this).offset().top;
				var scroll = $(window).scrollTop();
				var windowHeight = $(window).height();

				if ((scroll < elemPos +1000) && (elemPos < scroll+ windowHeight)){
					$(this).addClass('scrollin');
				}
				
				else{
					$(this).removeClass('scrollin');
				}
			});
		});
	});
(function($) {
      $(function() {
          var $header = $('#top-head');
          // Nav Fixed
          $(window).scroll(function() {
              if ($(window).scrollTop() > 350) {
                  $header.addClass('fixed');
              } else {
                  $header.removeClass('fixed');
              }
          });
          // Nav Toggle Button
          $('#nav-toggle').click(function(){
              $header.toggleClass('open');
          });
      });
  })(jQuery);
 </script>

</body>
</html>
