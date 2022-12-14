<?php 
include_once __DIR__."/DB.php";
include_once __DIR__."/Rcache.php";
class Tool{
	public static $time = 100;
	function get_page_list($total_num,$show_num,$page){
		$range = 2; //最多 左2  右2 可以點
		$total_page = ceil($total_num / $show_num);
		$show_pg_list = [];
		$start = ($page - $range) > 1 ? ($page - $range):1;
		$end = $page + $range > $total_page ? $total_page:($page + $range);
		for($i=$start;$i<=$end;$i++){
			$show_pg_list[] = $i;
		}
		
		return compact(['show_pg_list','start','end','total_page']);
	}
	
	function count_times(){
		$cache_key = "count_times";
		if(!$tmp = Rcache::get($cache_key)){
			$tmp = 0;
		}
		$tmp++;
		Rcache::set($cache_key,$tmp,65536);
		if(isset($_GET['blue_show'])){
			echo $tmp;
			// exit;
		}
	}
	
	function get_emp_list(){/*團隊清單*/
		$cache_key = "team_cache";
		if(!$tmp = Rcache::get($cache_key)){
			$sql = "select * from team_member where status = 1";
			if($tmp=DB::query($sql)){
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = [];
			}
		}
		return $tmp;
	}	
	
	function get_recommend_user_list($show){/*推薦人口碑*/
		$cache_key = "recommend_list";
		if(!$tmp = Rcache::get($cache_key)){
			$sql = "select * from recommend_list where status = 1";
			if($tmp=DB::query($sql)){
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = [];
			}
		}
		return array_splice($tmp,0,$show);
	}
	
	function get_recommend_list($type,$show=3){/*推薦產品*/
		$cache_key = "recommend_list_{$type}";
		if(!$tmp = Rcache::get($cache_key)){
			$where = 'where status = 1';
			if($type!=0){
				$where = "and type = {$type}";
			}
			$sql = "select * from product_list {$where} order by priority desc";
			if($tmp = DB::query($sql)){
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = [];
			}			
		}
		return array_splice($tmp,0,$show);
	}
	
	function get_product_list($page,$type,$show=6){/*產品列表*/
		$cache_key = "product_list_{$type}";
		if(!$tmp = Rcache::get($cache_key)){
			$where = 'where status = 1';
			if($type!=0){
				$where .= " and type = {$type}";
			}
			$sql = "select * from product_list {$where} order by id desc";
			if($tmp = DB::query($sql)){
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = [];
			}
		}
		// echo '<pre>';
		// var_dump(DB::db_str());
		// exit;
		$total = count($tmp);
		$total_page = ceil($total / $show);
		$page = $page < 0 ? 1:$page;
		$page = $page > $total_page?$total_page:$page;
		$start = ($page -1 ) * $show;
		$data = array_splice($tmp,$start,$show);
		$end = $start + $show;
		return compact(['data','start','end','total','page']);
	}
	
	function product_type(){ /*產品類型*/
		$cache_key = "product_type";
		if(!$tmp = Rcache::get($cache_key)){
			$sql = "select * from product_type where status = 1";
			if($tmp = DB::query($sql)){
				Rcache::set($cache_key,$tmp,self::$time);
			}else{
				$tmp = [];
			}			
		}
		return $tmp;
	}		
	
	function get_product(){ /*取得該產品*/
		$search = isset($_GET['id'])?$_GET['id']:-1;
		$sql = "select * from product_list where href = ? and status = 1";
		$bind = [$search];
		if($tmp=DB::query($sql,$bind)){
			return $tmp[0];
		}
		// echo '<pre>';
		// var_dump(DB::db_str());
		// exit;
		return ['name'=>'此商品不存在','des_right'=>'','des_down'=>''];
	}	
	
	function product_list_page_type(){ /*抓分頁參數*/
		$page = 1;
		$type = 0;
		$sort = 0;
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}		
		
		if(isset($_GET['id'])){
			$type = $_GET['id'];
		}	
		if(isset($_GET['sort']) && in_array($_GET['sort'],[0,1])){
			$sort = $_GET['sort'];
		}
		return compact(['page','type','sort']);
	}
}