<!-- footer-menu -->
<div id="footer-menu">
		<div class="inner">
			
			
			<!-- <div class="footer-logo"><a href="/">TF-30</a></div> -->
			<!-- /footer-logo -->
			<!-- <div class="footer-sub">サブタイトルが入りますサブタイトルが入ります</div> -->
			<!-- /footer-sub -->
			<div class="footer-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div><!-- /footer-logo -->
			<div class="footer-sub"><?php bloginfo('description'); //ブログのdescriptionを表示 ?></div><!-- /footer-sub -->
			
			<!-- <nav class="footer-nav">
				<ul class="footer-list">
					<li class="menu-item"><a href="#">メニュー1</a></li>
					<li class="menu-item"><a href="#">メニュー2</a></li>
					<li class="menu-item"><a href="#">メニュー3</a></li>
					<li class="menu-item"><a href="#">メニュー4</a></li>
					<li class="menu-item"><a href="#">メニュー5</a></li>
				</ul>
			</nav> -->
			<!-- header-nav -->
			<nav class="footer-nav">
			<div class="inner">
			<?php
			wp_nav_menu(
			//.footer-listを置き換えて、PC用メニューを動的に表示する
			array(
			'depth' => 1,
			'theme_location' => 'global2', //グローバルメニューをここに表示すると指定
			'container' => 'false',
			'menu_class' => 'header-list',
			)
			);
			?>
			</div><!-- /inner -->
			</nav><!-- header-nav -->


		</div><!-- /inner -->
	</div><!-- /footer-menu -->



	<!-- footer -->
	<footer id="footer">
		<div class="inner">
			<div class="copy">&copy; daily-trial WordPress theme All rights reserved.</div><!-- /copy -->
			<div class="by">Presented by <a href="https://tokyofreelance.jp/" rel="noopener" target="_blank">東京フリーランス</a>
			</div><!-- /by -->

		</div><!-- /inner -->
	</footer><!-- /footer -->




	<!-- ここからが追記部分 -->
	
		<?php if(is_single()): ?>
		<!-- footer-sns -->
		<div class="footer-sns">
		<div class="inner">

		<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

		<nav class="footer-sns-buttons">
		<ul>
		<li><a class="m_twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-twitter.png' ); ?>" alt=""></a></li>
		<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-facebook.png' ); ?>" alt=""></a></li>
		<li><a class="m_hatena" href="https://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-hatena.png' ); ?>" alt=""></a></li>
		<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-line.png' ); ?>" alt=""></a></li>
		<li><a class="m_pocket" href="https://getpocket.com/edit?url=<?php the_permalink(); ?>" rel="nofollow" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon-pocket.png' ); ?>" alt=""></a></li>
		</ul>
		</nav><!-- /footer-sns-buttons -->

		</div><!-- /inner -->
		</div><!-- /footer-sns -->
		<?php endif; ?>






	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

	<!-- 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script> 
    ここを置き換える。jqueryはWPデフォで読み込まれるので消してOK。
    functions.phpで記述しているのでよく読んで
    -->
	<?php wp_footer(); ?>
</body>

</html>