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
	$article_photo = json_decode($_POST['article_photo'], true);
	$table_name = 'article';

	$article = [
		'c_id' => $_POST['c_id'],
		'tag_id' => $_POST['tag_id'],
		'tag_name' => $_POST['tag_name'],
		'fb_pixel_id' => $_POST['fb_pixel_id'],
		'fb_img' => $_POST['fb_img'],
		'title' => $_POST['title'],
		'summary' => $_POST['summary'],
		'content' => str_replace('src="" adonis-src="/biotree_article', 'src="/img/html', $_POST['content']),
		'create_uid' => $_POST['create_uid'],
		'update_uid' => $_POST['update_uid'],
		'create_dt' => $_POST['create_dt'],
		'update_dt' => $_POST['update_dt'],
		'online' => 1,
	];
	

	if (checkRepeat($table_name, $id)) {
		DB::set($table_name, $article, ['id' => $id]);
	} else {
		// $content = str_replace('adonis-src="/biotree_article', 'adonis-src="/img/html', $content);
		$article['id'] = $id;
		$auid = DB::add($table_name, $article);
	}

	$img_dir = str_replace('api', "img/html/", dirname(__FILE__));
	$img_dir = str_replace('/home/cfd888/public_html/biotree', '..', $img_dir);

	// $result['dir'] = $img_dir;

	// 是否建立目錄
	$file_number = ceil($id/1000);
	$img_dir = $img_dir."f{$file_number}/";
	if (false !== $img_dir && false === is_dir($img_dir)) {
		mkdir($img_dir);
		chmod($img_dir, 0777);
	}

	// 是否建立目錄
	$newDir = $img_dir."n{$id}/";
	if (false !== $newDir && false === is_dir($newDir)) {
		mkdir($newDir);
		chmod($newDir, 0777);
	}

	// $result['newDir'] = $newDir;

	get_url_photo($article_photo['facebook'], $newDir.'f.jpg');
	// get_url_photo($article_photo['cover_1'], $newDir.'t.jpg');
	// adjust_img_size($newDir.'t.jpg', $article_id, 't');

	// if (in_array($website, ['barbachacha', 'top365', 'ar.kekeplays', 'kekeplays', 'keketravel', 'funsoccer', 'kekepets']) && !empty($article_photo['cover_2'])) {
	// 	get_url_photo($article_photo['cover_2'], $newDir.'c.jpg');
	// 	adjust_img_size($newDir.'c.jpg', $article_id, 'c');
	// }
	
	foreach ($article_photo['content'] as $key => $img) {
		if (preg_match('/[0-9]+\.jpg/', $img, $match)) {
			$number =  str_replace('.jpg', '', $match[0]);
		} elseif (preg_match('/[0-9]+\.gif/', $img, $match)) {
			$number =  str_replace('.gif', '', $match[0]);
		} else {
			$number = $key;
		}
		
		$filenameExtension = '.jpg';
		if (preg_match('/\.gif/', $img)) $filenameExtension = '.gif';
		get_url_photo($img, $newDir.$number.$filenameExtension);
	}

	$fb_img = "https://biotree.com.tw/img/html/f{$file_number}/n{$id}/f.jpg";
	DB::set($table_name, ['fb_img' => $fb_img], ['id' => $id]);

	// 清除memcached
	// $categoryID = $c_id;
	// $memcached = new iplayfun_memcached($website);
	// $memcached->deleteMulti('[Global]new_article_list');
	// $memcached->deleteMulti("Related[category]new_$categoryID");
	// $memcached->deleteMulti("Index[category]new_$categoryID");
	// $memcached->deleteMulti("Article[$id]article");
	// $memcached->deleteMulti('Category[New]pagelist_1');
	// $memcached->deleteMulti("Category[$categoryID]pagelist_1");
	
	$result['status'] = true;
	$result['message'] = '成功';
	$result['id'] = $id;
	echo json_encode($result);
	exit;
}

$result['message'] = '無文章資料';
echo json_encode($result);
exit;

/*
 * 檢查文章是否重複
 */
function checkRepeat($table_name, $id)
{
	$sql = "SELECT id FROM `$table_name` WHERE id = $id";
	$tmp = DB::query($sql);

    return $tmp;
}

/*
 * 下載圖片
 */
function get_url_photo($url, $filename)
{
	// if (is_url_exist($url)) {
		file_put_contents($filename, file_get_contents($url));
	// }
}

/*
 * 檢查圖片
 */
function is_url_exist($url)
{
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_NOBODY, true);
	curl_exec($ch);
	$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	if ($code == 200) {
		$status = true;
	} else {
		$status = false;
	}
	curl_close($ch);

	return $status;
}

/*
 * 製作封面圖縮圖
 */
// function adjust_img_size($filename, $index, $new_name)
// {
// 	if (empty($filename)) return '';
// 	$img_type = '';
	
// 	if (is_file($filename) === true) {
// 		chmod($filename, 0777);
		
// 		// 製作縮圖
// 		$src_info = getimagesize($filename);
// 		if ($src_info['mime'] == 'image/png') {
// 			$src_im = imagecreatefrompng($filename);
// 		} elseif ($src_info['mime'] == 'image/gif') {
// 			$src_im = imagecreatefromgif($filename);
// 		} else {
// 			$src_im = imagecreatefromjpeg($filename);
// 		}
// 		if (!$img_type) $img_type = $src_info['mime'];
// 		$alpha = 100;
		
// 		preg_match('/\/(?P<type>png|jpeg|gif)/', $src_info['mime'], $match);
		
// 		if (empty($match['type'])) return false;
// 		elseif ($match['type'] == 'jpeg') $match['type'] = 'jpg';
		
// 		// 大圖
// 		// $filename = $img_dir . 'n' . $index . '/' . $new_name . '.jpg';
// 		// $a_width = 500;
// 		// $a_height = 375;

// 		// $resize = imagecreatetruecolor($a_width, $a_height) or die("error4!\n");
// 		// imagecopyresampled($resize, $src_im, 0, 0, 0, 0, $a_width, $a_height, $src_info[0], $src_info[1]);
// 		// imagejpeg($resize, $filename, $alpha);
		
// 		// $src_info = getimagesize($filename);
// 		// $src_im = imagecreatefromjpeg($filename);

// 		// 小圖
// 		$filename_m = str_replace('.jpg', '_m.jpg', $filename) ;
// 		if ($new_name == 't') {
// 			$a_width = 400;
// 			$a_height = 300;
// 		} else {
// 			$a_width = 400;
// 			$a_height = 200;
// 		}

// 		$resize = imagecreatetruecolor($a_width, $a_height) or die("error4!\n");
// 		imagecopyresampled($resize, $src_im, 0, 0, 0, 0, $a_width, $a_height, $src_info[0], $src_info[1]);
// 		imagejpeg($resize, $filename_m, $alpha);
		
// 		return $match['type'];
// 	} else {
// 		return 'no file';
// 	}
// }