<!doctype html>
<html class="no-js" lang="zh-Hant-TW">

<head>
	<!-- <title>Biotree - 健康專欄</title> -->
	<?php
	$meta_type = '健康專欄';
	include('./data/meta.php')
	?>
	<link rel="stylesheet" href="/assets/css/blue.css">
	<!-- <?php include_once("head.php"); ?> -->
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
	<?php
	// include_once("header.php");
	include_once __DIR__ . "/lib/Article.php";
	include_once __DIR__ . "/lib/Tool.php";
	$tmp = Tool::product_list_page_type();
	$page = $tmp['page'];
	$type = $tmp['type'];
	$show = 9;
	$list = [];
	$total = 0;


	$tags = Article::get_tag();
	$find_tag_id = 0;
	if (isset($_GET['tag']) && count($tags) > 0) {
		$find_tag_tmp = array_column($tags, "id", "name");
		$find_tag_id = isset($find_tag_tmp[$_GET['tag']]) ? $find_tag_tmp[$_GET['tag']] : 0;
	}

	// var_dump($find_tag_tmp);

	if ($tmp = Article::get_list($page, $show, $type, $find_tag_id)) {
		$list = $tmp['list'];
		$total = $tmp['total'];
		$page = $tmp['page'];
	}

	$pg_tmp = Tool::get_page_list($total, $show, $page);
	$pgae_list = $pg_tmp['show_pg_list'];


	?>
	<div id="template" style="flex:1 0 auto;  min-height:60vh">
		<div id="site_path" class="mb-0">
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
					</ol>
				</nav>
			</div>
		</div>

		<main>
			<!-- <img alt="" src="https://biotree.com.tw/img/article_list/top_l.jpg" class="img-fluid mb-5" /> -->

			<!-- page title area start -->
			<section class="page__title p-relative d-flex align-items-center article_list_top mb-5">

			</section>
			<!-- page title area end -->

			<!-- blog area start -->
			<section class="blog__area pt-100 pb-100">
				<div class="container">
					<div id="tags">
						<ul>
							<?php foreach ($tags as $key => $val) : ?>
								<a href="/article_list/0/1?tag=<?= $val['name'] ?>">
									<li class="mt-2">#<?= $val['name'] ?></li>
								</a>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="row">
						<div style=" justify-content: center;font-size: 18px;margin-left: calc(50% - 24px);margin-top: 40px;
display:<?= count($list) > 0 ? 'none' : 'block' ?>" class="font-weight-bold">
							尚無文章
						</div>

						<?php foreach ($list as $key => $val) : ?>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="blog__wrapper">
									<div class="blog__item blog__border-bottom mb-5 pb-5">
										<div class="blog__thumb fix overflow-hidden">
											<a href="/article/<?= $val['id'] ?>"><img src="<?= $val['fb_img'] ?>" alt="blog" class="article-img img-fluid"></a>
										</div>
										<div class="blog__content mt-5">
											<h4 class="h5"><a href="/article/<?= $val['id'] ?>" class="text-dark text-decoration-none"><?= $val['title'] ?></a></h4>
											<div class="blog__meta my-3">
												<span><?= $val['create_dt'] ?></span>
											</div>
											<p><?= $val['summary'] ?></p>
											<a href="/article/<?= $val['id'] ?>" class="btn btn-outline-info">閱讀更多</a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<div class="shop-pagination-wrapper d-md-flex justify-content-between align-items-center mb-5">
								<div class="basic-pagination">
									<ul class="d-flex">
										<?php
										if ($page > 1) { //只能跑一次
											echo "<li><a class='text-dark mx-1' href='/article_list/" . $type . "/" . ($page - 1) . "'><</a></li>";
										}
										foreach ($pgae_list as $key => $val) {
											$active = $val == $page ? 'class="active"' : '';
											echo "<li {$active} ><a class='mx-1' href='/article_list/" . $type . "/" . ($val) . "'>{$val}</a></li>";
										}
										if ($page < $pg_tmp['total_page']) { //只能跑一次
											echo "<li><a class='text-dark mx-1' href='/article_list/" . $type . "/" . ($page + 1) . "'>></a></li>";
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- blog area end -->
		</main>
	</div>

	<?php include './components/footer.php' ?>

	<!-- footer area end -->
	<div id="gototop">
		<a href="javascript:void(0)">
			<i class="fas fa-arrow-up"></i>
		</a>
	</div>
</body>

</html>