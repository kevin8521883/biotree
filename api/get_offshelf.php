<?php
header('Content-Type:text/html; charset=utf-8');
include_once __DIR__."/../lib/DB.php";

$result['status'] = false;
$result['message'] = '';

$headers = apache_request_headers();
$token = isset($headers['Token']) ? $headers['Token'] : '';

if ($token != 'yoawfwai78') {
	$result['message'] = 'token錯誤';
	echo json_encode($result);
	exit;
}

if (!empty($_POST)) {
	$id = $_POST['id'];
	$c_id = $_POST['c_id'];
	$front_id = $_POST['front_id'];
	$table_name = 'article';
	
	DB::set($table_name, ['online' => 0], ['id' => $front_id]);

	// // 清除memcached
	// $categoryID = $c_id;
	// $memcached = new iplayfun_memcached($website);
	// $memcached->deleteMulti("Article[$front_id]article");

	// $memcached->deleteMulti('[Global]new_article_list');
	// $memcached->deleteMulti("Related[category]new_$categoryID");
	// $memcached->deleteMulti("Index[category]new_$categoryID");
	// $memcached->deleteMulti('Category[New]pagelist_1');
	// $memcached->deleteMulti("Category[$categoryID]pagelist_1");

	// $memcached->deleteMulti('[Global]hot_article_list');
	// $memcached->deleteMulti("Related[category]hot_$categoryID");
	// $memcached->deleteMulti('[Global]total_hot_article_list');
	// $memcached->deleteMulti('[Global]rand_article_list');

	$result['status'] = true;
	$result['message'] = '下架成功';
	echo json_encode($result);
	exit;
}

$result['message'] = '無文章資料';
echo json_encode($id_array);
exit;