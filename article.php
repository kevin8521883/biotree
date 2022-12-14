<!doctype html>
<html class="no-js" lang="zh-Hant-TW">

<head>
	<!-- <title>Biotree - 保健專欄</title> -->
	<link rel="stylesheet" href="/assets/css/blue.css">
	<?php

	include_once __DIR__ . "/lib/Article.php";
	include_once __DIR__ . "/lib/Tool.php";
	$tmp = Tool::product_list_page_type();
	$id = $tmp['type'];
	$ogpic = false;
	$ogtitle = false;
	$tags = [];
	$recommend_list = [];
	if ($article = Article::get_article($id)) {
		$fb_pixel_id = $article['fb_pixel_id'];
		$ogpic = $article['fb_img'];
		$ogtitle = $article['title'];
		$tags = json_decode($article['tag_name'], 1);
		$recommend_list = Article::get_recommend_list($article);
	} else {
		$url = "https://biotree.com.tw/article_list/0/1";
		header("Location:{$url}");
		exit;
		$article = ['title' => '', 'content' => '', 'create_dt' => ''];
	}
	// echo ();


	$share_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$ogurl = $share_url;

	// include_once("head.php");
	$meta_type = '專欄內容';
	include('./data/meta.php')
	?>
	<!-- <meta name="description" content="<?= implode(",", $des) ?>"> -->
</head>

<body style="display: flex; flex-direction: column;">
	<!-- Navigation -->
	<span class="drawer drawer--left">
		<!-- header -->
		<?php include("./components/header.php") ?>
		<!-- Sidebar -->
		<?php include('./components/Sidebar.php') ?>
	</span>
	<main id="share-detail" read_complete="0" fbq="<?= $fbq ?>" website="biotree" attr="<?= $share_url ?>">
		<div id="template" style="flex:1 0 auto;  min-height:60vh">
			<div id="site_path">
				<div class="container">
					<!-- 主題版型麵包屑 -->
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
							<li class="breadcrumb-item
              " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<!-- home -->
								<a href="/" itemprop="item">
									<i class="fas fa-home"></i>
									<span style="display: none;" itemprop="name">首頁</span>
								</a>
								<!-- account -->
								<meta itemprop="position" content="1" />
							</li>
							<li class="breadcrumb-item
               active " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<!-- home -->
								<a href="/article_list" itemprop="item">
									<span itemprop="name">健康專欄</span>
								</a>
								<!-- product's collections -->
								<meta itemprop="position" content="2" />
							</li>
							<li class="breadcrumb-item
               active " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
								<!-- home -->
								<a href="<?= $_SERVER['REQUEST_URI'] ?>" itemprop="item">
									<span itemprop="name"><?= $article['title'] ?></span>
								</a>
								<!-- product's collections -->
								<meta itemprop="position" content="3" />
							</li>
						</ol>
					</nav>
				</div>
			</div>
			<section class="blog__area pt-55">
				<div class="container">
					<div id="ggwp" style="position:absoulate;width:100px;height:100px;left:-200000px;background-color:blue;position:fixed"></div>
					<div class="row" style="justify-content: center;">
						<div class="col-xl-9 col-lg-8">
							<div class="postbox__title mb-55">
								<h1><?= $article['title'] ?></h1>
								<div class="blog__meta">
									<span> <?= $article['create_dt'] ?></span>
								</div>
							</div>
							<div class="postbox__wrapper mb-40">
								<?= $article['content'] ?>
							</div>
							<div class="postbox__share mb-60">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="postbox__social d-flex">
											<span>Share to friends:</span>
											<ul>
												<a class="share_btn text-decoration-none" tid="1" href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer/sharer.php?u=<?= $share_url ?>');return false;">
													<img style="width:20px" src="https://img.icons8.com/material-rounded/24/000000/facebook-new.png" />
												</a>
												<a class="share_btn text-decoration-none" tid="0" id="copy" href="javascript:void(0);">
													<img src="https://img.icons8.com/material-sharp/18/000000/share.png" />
												</a>
												<a class="share_btn text-decoration-none" tid="2" target="_blank" href="http://line.naver.jp/R/msg/text/?<?= $share_url ?>">
													<img src="https://img.icons8.com/ios-filled/24/000000/line-me.png" />
												</a>
												<span id="show_copy_status" style="color:red"></span>
											</ul>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="postbox__tag">
											<span>Tags :</span>
											<ul>
												<?php foreach ($tags as $key => $val) : ?>
													<a href="/article_list/0/1?tag=<?= $val ?>">
														<li>#<?= $val ?></li>
													</a>
												<?php endforeach; ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="postbox__related-title my-5">
								<h3>熱門推薦文章</h3>
							</div>
							<div class="postbox__related-item">
								<div class="row">
									<?php foreach ($recommend_list as $key => $val) : ?>
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="blog__item blog__wrapper blog__border-bottom pb-5 mb-5">
												<div class="blog__thumb fix overflow-hidden">
													<a href="/article/<?= $val['id'] ?>" class="w-img"><img src="<?= $val['fb_img'] ?>" class="article-img img-fluid" alt="blog"></a>
												</div>
												<div class="blog__content">
													<h4 class="h5 my-3"><a href="/article/<?= $val['id'] ?>" class="text-dark text-decoration-none"><?= $val['title'] ?></a></h4>
													<div class="blog__meta">
														<span> <?= $val['create_dt'] ?></span>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
							<div class="postbox__line mt-65"></div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
	<?php include './components/footer.php' ?>

	<!-- footer area end -->
	<div id="gototop">
		<a href="javascript:void(0)">
			<i class="fas fa-arrow-up"></i>
		</a>
	</div>
</body>

</html>


<script>
	$(document).on("click", ".share_btn", function() {
		const server = $('#share-detail').attr('website');
		const tid = $(this).attr('tid');
		const list = [
			'copy', 'fb', 'line'
		];
		const share_type = typeof(list[tid]) != 'undefined' ? list[tid] : 'copy';
		const key = `share_btn_${share_type}-${server}`;
		track_fb(key);
	})


	window.Clipboard = (function(window, document, navigator) {
		var textArea,
			copy;

		function isOS() {
			return navigator.userAgent.match(/ipad|iphone/i);
		}

		function createTextArea(text) {
			textArea = document.createElement('textArea');
			textArea.value = text;
			// document.body.appendChild(textArea);
			document.getElementById("ggwp").appendChild(textArea);
		}

		function selectText() {
			var range,
				selection;

			if (isOS()) {
				range = document.createRange();
				range.selectNodeContents(textArea);
				selection = window.getSelection();
				selection.removeAllRanges();
				selection.addRange(range);
				textArea.setSelectionRange(0, 999999);
			} else {
				textArea.select();
			}
		}

		function copyToClipboard() {
			document.execCommand('copy');
			// document.body.removeChild(textArea);
		}

		copy = function(text) {
			createTextArea(text);
			selectText();
			copyToClipboard();
		};

		return {
			copy: copy
		};
	})(window, document, navigator);



	$(window).scroll(function() {
		const target = $(document).height() - $(window).height();
		const status = $("#share-detail").attr("read_complete");
		const server = $('#share-detail').attr('website');
		if (status == '0' && $(window).scrollTop() >= target - 200) {
			$("#share-detail").attr("read_complete", '1');
			const key = `view_complete-${server}`;
			track_fb(key);
		}
	});

	function track_fb(key) {
		// console.log(key);
		if ($("#share-detail").attr("fbq")) {
			fbq('track', key);
			console.log('done', key);
		} else {
			console.log('no fbq');
		}
	}

	$(document).on("click", "#copy", function() {

		if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {
			Clipboard.copy($("#share-detail").attr("attr"));
			$("#show_copy_status").html('複製成功');
		} else {
			var clip_area = document.createElement('textarea');
			clip_area.textContent = $("#share-detail").attr("attr");


			$("#share-detail")[0].appendChild(clip_area);
			clip_area.select();
			document.execCommand('copy')
			$("#show_copy_status").html('複製成功');
			clip_area.remove();
		}

		window.setTimeout(() => {
			$("#show_copy_status").html('');
		}, 2000)

	})
</script>