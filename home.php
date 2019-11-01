<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>タイトル</title>
<meta name="description" content="ディスクリプション">
<!-- <link rel="icon" href="./img/favicon.ico"> -->
<?php wp_head(); ?>
</head>
<body>


<header class="gheader">
	<div class="inner">

		<h1 class="header-logo">
			<a href="#">
				<img src="./img/header-logo.png" alt="ロゴ">
			</a>
			<!-- <span class="subttl txtxs">サブタイトル</span> -->
		</h1><!-- /header-logo -->

		<nav class="header-nav">
			<ul class="header-list">
				<li><a href="#">MENU1</a></li>
				<li><a href="#">MENU2</a></li>
				<li><a href="#">MENU3</a></li>
				<li><a href="#">MENU4</a></li>
				<li><a href="#">MENU5</a></li>
			</ul>
		</nav><!-- /header-nav -->

		<button class="header-btn" type="button" aria-label="">
			<p class="txtxs">Lorem ipsum dolor</p>
		</button><!-- /header-btn -->

	</div><!-- /inner -->
</header><!-- /header -->


<div class="drawer">
	<button class="drawer-toggler" type="button" data-toggle="collapse" aria-controls="GDrawerCont"
	aria-label="Global navigation toggle button">
		<span></span>
	</button>
	<div class="drawer-close"></div>

	<!-- drawer-contents -->
	<div class="drawer-contents" id="GDrawerCont">
		<nav class="drawer-nav">
			<ul class="drawer-list">
				<li><a href="#">MENU1</a></li>
				<li><a href="#">MENU2</a></li>
				<li><a href="#">MENU3</a></li>
				<li><a href="#">MENU4</a></li>
				<li><a href="#">MENU5</a></li>
			</ul>
		</nav><!-- /drawer-nav -->

	</div><!-- /drawer-contents -->
</div><!-- /drawer -->


<div class="mv">
	<div class="inner">
		<p class="catchcopy txtl">キャッチコピー</p>

		<div class="main-slider">
			<a href="#">
				<img class="slider-img pc" src="./img/slider-item01" alt="slide01">
				<img class="slider-img sp" src="./img/slider-item01-sp" alt="slide01-sp">
			</a>
			<a href="#">
				<img class="slider-img pc" src="./img/slider-item02" alt="slide02">
				<img class="slider-img sp" src="./img/slider-item02-sp" alt="slide02-sp">
			</a>
		</div><!-- /main-slider-->

	</div><!-- /inner -->
</div><!-- /mv -->

<ul class="panel-group inner">  <!-- 実際に使う際はinnerを消して-->
	<li class="panel"><p><a class="panel-heading" data-toggle="collapse" data-target="panel01">MENU1</a></p>
		<ul id="panel01" class="panel-collapse">
			<li><a href="#panel01">Child1</a></li>
			<li><a href="#panel01">Child2</a></li>
			<li><a href="#panel01">Child3</a></li>
		</ul>
	</li> <!-- /panel -->
	<li class="panel"><p><a class="panel-heading" data-toggle="collapse" data-target="panel02">MENU2</a></p>
		<ul id="panel02" class="panel-collapse">
			<li><a href="#panel02">Child1</a></li>
			<li><a href="#panel02">Child2</a></li>
			<li><a href="#panel02">Child3</a></li>
		</ul>
	</li> <!-- /panel -->
</ul>

<div class="float">
	<a href="#"></a>

	<button class="toTop" type="button" aria-label="Back to top">
		<i class="fas fa-chevron-up arrow"></i>
	</button>
</div><!-- /float -->

<form action="/" method="post" class="inner"> <!-- 実際に使う際はinnerを消して-->
	<div class="form-outer"><input type="text" name="user_last_name" value="" placeholder="姓"></div>
	<div class="form-outer"><input type="text" name="user_first_name" value="" placeholder="名"></div>
	<div class="form-outer"><input type="email" name="user_email" value="" placeholder="メールアドレス"></div>
	<div class="form-outer"><textarea name="user_message" cols="90" rows="12" placeholder="質問などはこちら（空欄でもOK）"></textarea></div>
	<div class="form-outer"><button type="submit" class="submit-btn">送信</button></div>
</form><!-- /form -->


<div id="contents">
  <div class="inner">

	<main>
			<section class="leading">
				<div class="inner">
					<h2 class="ttll"></h2>
					<p class="txt"></p>
				</div>
			</section>
			<section class="aboutcompany">
				<div class="inner">
					<h2 class="ttll"></h2>
					<p class="txt"></p>
				</div>
			</section>
			<section class="">
				<div class="inner">
					<h2 class="ttll"></h2>
					<p class="txt"></p>
				</div>
			</section>
	</main><!-- primary -->

		<aside>
		</aside><!-- /secondary -->


  </div><!-- /inner -->
</div><!-- /contents -->

<footer class="gfooter">
	<aside class="gfooter-contents">
		<div class="f-menu inner">
			<dl class="f-menu01">
				<dt>
				</dt>
				<div class="f-grid-bx">
					<dd></dd>
					<dd></dd>
					<dd></dd>
				</div>
			</dl>
		</div>
	</aside><!-- /gfooter-contents -->

	<div class="gfooter-bottom">
		<div class="inner">
			<!-- <div><img src="./img/f-logo.png" alt=""></div> -->
			<p class="copy"><small>&copy;</small></p>
			<!-- /copy -->
		</div>
	</div><!-- /gfooter-bottom -->
</footer><!-- /footer -->

<script type="text/javascript">
	$(function() {
		$(".mv-slider").slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed: 3000,
			arrows: false,
		});
	});
</script>
<?php wp_footer(); ?>
</body>
</html>
