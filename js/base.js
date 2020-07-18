

/* ------------------------
	Navの表示　（修正）
------------------------ */
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
		/*------------------------------------
		＜仕組み＞
		　openかreturnのどちらかのクラスがつくようになっている
		 openとるならreturnを入れる
		 returnをとるならopenを入れる
		------------------------------------*/
		// 1ページ目を押すと、全てのページが戻ってくる
		$('#page1').click(function(){
			$('#page_item1').removeClass('open');
			$('#page_item2').removeClass('open');
			$('#page_item3').removeClass('open');
			$('#page_item4').removeClass('open');
			$('#page_item5').removeClass('open');
			$('#page_item1').addClass('return');
			$('#page_item2').addClass('return');
			$('#page_item3').addClass('return');
			$('#page_item4').addClass('return');
			$('#page_item5').addClass('return');

			// ページの丸の拡大
			$('#page1').css('transform','scale(1.8)');
			$('#page2').css('transform','scale(1)');
			$('#page3').css('transform','scale(1)');
			$('#page4').css('transform','scale(1)');
			$('#page5').css('transform','scale(1)');

			/*ページの拡大*/
			$('#page_item1').addClass('scale');
			$('#page_item2').removeClass('scale');
			$('#page_item3').removeClass('scale');
			$('#page_item4').removeClass('scale');
			$('#page_item5').removeClass('scale');

		});
		// 2ページ目を押すと、1ページ目が開く
		$('#page2').click(function(){
			$('#page_item1').addClass('open');
			$('#page_item2').removeClass('open');
			$('#page_item3').removeClass('open');
			$('#page_item4').removeClass('open');
			$('#page_item5').removeClass('open');
			$('#page_item1').removeClass('return');
			$('#page_item2').addClass('return');
			$('#page_item3').addClass('return');
			$('#page_item4').addClass('return');
			$('#page_item5').addClass('return');
			// ページの丸の拡大
			$('#page1').css('transform','scale(1)');
			$('#page2').css('transform','scale(1.8)');
			$('#page3').css('transform','scale(1)');
			$('#page4').css('transform','scale(1)');
			$('#page5').css('transform','scale(1)');

			/*ページの拡大*/
			$('#page_item1').removeClass('scale');
			$('#page_item2').addClass('scale');
			$('#page_item3').removeClass('scale');
			$('#page_item4').removeClass('scale');
			$('#page_item5').removeClass('scale');
		});


		// 3ページ目を押すと、3ページ目より前のページが開く
		$('#page3').click(function(){
			$('#page_item1').addClass('open');
			$('#page_item2').addClass('open');
			$('#page_item3').removeClass('open');
			$('#page_item4').removeClass('open');
			$('#page_item5').removeClass('open');
			$('#page_item1').removeClass('return');
			$('#page_item2').removeClass('return');
			$('#page_item3').addClass('return');
			$('#page_item4').addClass('return');
			$('#page_item5').addClass('return');
			// ページの丸の拡大
			$('#page1').css('transform','scale(1)');
			$('#page2').css('transform','scale(1)');
			$('#page3').css('transform','scale(1.8)');
			$('#page4').css('transform','scale(1)');
			$('#page5').css('transform','scale(1)');

			/*ページの拡大*/
			$('#page_item1').removeClass('scale');
			$('#page_item2').removeClass('scale');
			$('#page_item3').addClass('scale');
			$('#page_item4').removeClass('scale');
			$('#page_item5').removeClass('scale');
		});


		// 4ページ目を押すと、4ページ目より前のページが開く
		$('#page4').click(function(){
			$('#page_item1').addClass('open');
			$('#page_item2').addClass('open');
			$('#page_item3').addClass('open');
			$('#page_item4').removeClass('open');
			$('#page_item5').removeClass('open');
			$('#page_item1').removeClass('return');
			$('#page_item2').removeClass('return');
			$('#page_item3').removeClass('return');
			$('#page_item4').addClass('return');
			$('#page_item5').addClass('return');
			// ページの丸の拡大
			$('#page1').css('transform','scale(1)');
			$('#page2').css('transform','scale(1)');
			$('#page3').css('transform','scale(1)');
			$('#page4').css('transform','scale(1.8)');
			$('#page5').css('transform','scale(1)');

			/*ページの拡大*/
			$('#page_item1').removeClass('scale');
			$('#page_item2').removeClass('scale');
			$('#page_item3').removeClass('scale');
			$('#page_item4').addClass('scale');
			$('#page_item5').removeClass('scale');
		});


		// 5ページ目を押すと、5ページ目より前のページが開く
		$('#page5').click(function(){
			$('#page_item1').addClass('open');
			$('#page_item2').addClass('open');
			$('#page_item3').addClass('open');
			$('#page_item4').addClass('open');
			$('#page_item1').removeClass('return');
			$('#page_item2').removeClass('return');
			$('#page_item3').removeClass('return');
			$('#page_item4').removeClass('return');
			// ページの丸の拡大
			$('#page1').css('transform','scale(1)');
			$('#page2').css('transform','scale(1)');
			$('#page3').css('transform','scale(1)');
			$('#page4').css('transform','scale(1)');
			$('#page5').css('transform','scale(1.8)');

			/*ページの拡大*/
			$('#page_item1').removeClass('scale');
			$('#page_item2').removeClass('scale');
			$('#page_item3').removeClass('scale');
			$('#page_item4').removeClass('scale');
			$('#page_item5').addClass('scale');
		});
	});
})(jQuery);

/* ------------------------
	フェイドイン
------------------------ */
$(function(){
	$(window).scroll(function (){
		$('.fadein').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();

			if (elemPos < scroll+ windowHeight - 200){
				$(this).toggleClass('scrollin');
			}
		});
		$('.fadeinleft').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();

			if (elemPos < scroll+ windowHeight - 200){
				$(this).addClass('scrollinleft');
			}
		});
		$('.fadeinright').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();

			if (elemPos < scroll+ windowHeight - 200){
				$(this).addClass('scrollinright');
			}
		});
	});
});


//--ーーーーーーーーーーーーーーーー
// スワイパー
//ーーーーーーーーーーーーーーーー-

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
