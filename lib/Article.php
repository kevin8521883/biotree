<?php 
include_once __DIR__."/DB.php";
include_once __DIR__."/Rcache.php";
class Article{
	public static $time = 100;
	function get_list($page,$show,$type,$tag){
		$status = true;
		$total = 0;
		$cache_key = "article_{$type}_{$tag}";
		if(!$tmp = Rcache::get($cache_key)){
			$where = "";
			if($type!=0){
				$where .= "and c_id = {$type}";
			}		
			if($tag!=0){
				$where .= 'and tag_id = '."'[".'"'.$tag.'"'."]'";
			}
			$sql = "select *,DATE(create_dt) as create_dt from article where online = 1 {$where}";
			if(!$tmp=DB::query($sql)){
				$status = false;
			}else{
				Rcache::set($cache_key,$tmp,self::$time);
			}
			// echo '<pre>';
			// var_dump(DB::db_str());
		}
		
		if($status){
			$total = count($tmp);
			$total_page = ceil($total / $show);
			$page = $page < 0 ? 1:$page;
			$page = $page > $total_page?$total_page:$page;
			$start = ($page -1 ) * $show;
			
			$list = array_splice($tmp,$start,$show);
			return compact(['total','list','status','page']);
		}
		
		return false;
	}
	
	function get_article($id){
		$cache_key = "article_content_{$id}";
		if(!$tmp = Rcache::get($cache_key)){
			$sql = "select id,title,summary,fb_pixel_id,content,fb_img,tag_name,'萌王美琴' as auth,DATE(create_dt) as create_dt  from article where id = ? and online = 1";
			$bind = [$id];
			if($temp=DB::query($sql,$bind)){
				$tmp = $temp[0];
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = false;
			}
		}
		
		return $tmp;
	}
	
	function get_tag(){
		$cache_key = "article_tag";
		if(!$tmp = Rcache::get($cache_key)){
			$sql = "SELECT * FROM `tag`";
			if($tmp=DB::query($sql)){
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = [];
			}
		}
		return $tmp;
	}	
	
	function get_category(){
		$cache_key = "article_category";
		// if(!$tmp = Rcache::get($cache_key)){
			$sql = "SELECT * FROM `category` where online = 1";
			if($tmp=DB::query($sql)){
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = [];
			}
		// }
		return $tmp;
	}
	
	function get_recommend_list($article){
		$cache_key = "article_recommend_list";
		if(!$tmp = Rcache::get($cache_key)){
			$sql = "select *,'萌王美琴' as auth,DATE(create_dt) as create_dt from article where id != {$article['id']} and online = 1 limit 0,6";
			if($tmp=DB::query($sql)){
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = [];
			}
		}
		return $tmp;
	}
	
	function clear_cache($para){
		$cache_keys = [
			"article_tag",
			"article_recommend_list",
			"article_category",
		];
		foreach($cache_keys as $key => $val){
			Rcache::del($val);
		}
		
		if(isset($para['type'])){ //刪除文章的category
			Rcache::del("article_{$para['type']}");
		}		
		
		if(isset($para['id'])){ //刪除文章的內容
			Rcache::del("article_content_{$para['id']}");
		}
	}
	
}