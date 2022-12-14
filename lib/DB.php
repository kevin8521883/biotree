<?php
ini_set('memory_limit', '1024M');

class DB{
	public static $conn;
	public static $db_str = array();
	public static $data = [];
	public static $show = 10;
	private function __construct(){
	
		$usr_data = [
			"id"=>"biotree",
			"pwd"=>"cfd888",
			"host"=>"localhost",
			"db"=>"biotree",
			"port"=>"3306",
		];
		if($usr_data){
			self::$data = $usr_data;
			$db_id = self::$data['id'];
			$db_pw = self::$data['pwd'];
			$db_host = self::$data['host'];
			$db = self::$data['db'];
			$port = self::$data['port'];
			try{
				self::$conn = new \pdo("mysql:host={$db_host};port={$port};dbname={$db}",$db_id,$db_pw);
				self::$conn->query('SET NAMES UTF8MB4');
				self::$conn->query("set time_zone = '+8:00'");
			}catch(PDOException $e){
				echo 'db login faild';
				exit;
			}
		}else{
			echo 'no_data';
			exit;
		}
	}

	public static function add($table,$insert){
		foreach($insert as $key => $val){
			$insert_field_arr[] = $key;
			$insert_value_arr[] = $val;
			$insert_value_pre[] = '?';
		}
		$sql = "insert into {$table}(".implode(',',$insert_field_arr).") values(".implode(',',$insert_value_pre).")";
		$data = self::exute_query($sql,$insert_value_arr);
		if($data){
			if(self::$conn->lastInsertId()){
				$data = self::$conn->lastInsertId();
			}
		}
		return $data;
	}

	public static function db_key($db){//抓出table的欄位字串值
		$sql = "select column_name  from information_schema.columns  where table_name = '{$db}'";
		$tmp = self::exute_query($sql,array(),1);
		if($tmp){
			$data = array_column($tmp,'column_name');
		}
		return $data;
	}

	public static function page_data($data,$page){//抓出table的欄位字串值
		$total = count($data);
		$start = $page['page'] * $page['count'];
		$data = array_splice($data,$start,$page['count']);
		return ["data"=>$data,"total"=>$total];
	}


	public static function db_getauid($table){
		// $tablename = $this->db_gettablename();
		$str = "SHOW TABLE STATUS LIKE '{$table}'";
		$tmp = self::exute_query($str,array(),1);
		return $tmp[0]['Auto_increment'];
	}

	public static function condition_page($page,$table,$condition,$limit_where=array()){
		$db_status = ['asc','desc'];
		$white_list = self::db_key($table);//抓出table的欄位字串值 作為白名單
		$where = array();
		$order_field_arr = array();
		$choose = [];//確定or或and

		foreach($limit_where as $key => $val){
			$condition[] = ['condition'=> $val['condition'],'field'=>$val['field'],'value'=>$val['value'],'sign'=>$val['sign']];
		}


		foreach($condition as $key => $val){
			if($white_list){
				if($val['condition']==0){// where 條件 [key] = [value,value] 當一個key有多個值要組or
					if($index=array_search($val['field'],$white_list)!==false){//只有在白名單內的字串能新增
						if(array_key_exists($white_list[array_search($val['field'],$white_list)],$choose)){
							$choose[$white_list[array_search($val['field'],$white_list)]][] = ['value'=>$val['value'],'sign'=>$val['sign']];
						}else{
							$choose[$white_list[array_search($val['field'],$white_list)]] = [['value'=>$val['value'],'sign'=>$val['sign']]];
						}
					}
				}else{ //order
					$data = array_search($val['field'],$white_list);
					if($index=array_search($val['field'],$white_list)!==false){
						$order_field_arr[]=$white_list[array_search($val['field'],$white_list)]." ".$db_status[$val['value']];
					}
				}
			}
		}

		$signlist = ["=","!=",">","<","like"];
		$signlist_sub = [
			"="=>"or",
			"!="=>"and",
			">"=>"and",
			"<"=>"and",
		];

		if(count($choose)){//決定出 or的語句
			foreach($choose as $key => $val){
				if(count($val)>1){
					$tmp_arr = '';
					foreach($val as $index => $db_value){
						if($index<count($val)-1){
							$tmp_arr .= $key." {$signlist[$db_value['sign']]} ? {$signlist_sub[$signlist[$db_value['sign']]]} ";
						}else{
							$tmp_arr .= $key."  {$signlist[$db_value['sign']]} ?";
						}
						$where[] = $db_value['value'];
					}
					$where_field_arr[] = " ( ".$tmp_arr." ) ";
				}else{
					$where_field_arr[] = $key." {$signlist[$val[0]['sign']]} ? ";
					$where[] = $val[0]['value'];
				}
			}
		}else{
			$where_field_arr = [1];
		}

		if(!count($order_field_arr)){
			$order_field_arr = [1];
		}
		$value_arr = (count($where)) ? array_values($where):$where;
		$sql = "select * from {$table} where  ".implode(" and ",$where_field_arr)." order by ".implode(" , ",$order_field_arr)."";
		$data = self::getpagedata($page,$sql,$value_arr);
		return $data;
	}



	public static function query($sql,$where = array()){
		$value_arr = (count($where)) ? array_values($where):$where;
		$data = self::exute_query($sql,$value_arr,1);
		return $data;
	}

	public static function getpagedata($page,$sql,$where = array()){
		$start = $page * self::$show;
		$sql2 = $sql." limit {$start} ,".self::$show;
		$value_arr = (count($where)) ? array_values($where):$where;
		$count = count(self::exute_query($sql,$value_arr,1));
		$totalpage = ceil($count/self::$show);
		$data = self::exute_query($sql2,$value_arr,1);
		if($data==0){
			$count = 0;
		}
		return compact('data','totalpage','count');
	}
	/*
		$update = [
			"type" => "type + 3",
		];

		$where = ['id'=>1];
		DB::set("config",$update,$where);
	*/
	public static function set($table,$update,$where,$where_para = []){
		$pre_sql = "";
		$value_arr = [];
		$update_field_arr = [];
		// var_dump($update);
		
		foreach($update as $field=>$value){
			if(strpos($value,$field) !== false){ 
				if(strlen($pre_sql)>0){
					$pre_sql .= ", {$field} = {$value} ";
				}else{
					$pre_sql .= "{$field} = {$value} ";
				}
				
			}else{
				$update_field_arr[]=$field." = ? ";
				$value_arr[]=$value;	
			}
		}
		
		if(strlen($pre_sql)>0 && count($value_arr)>0){
			$pre_sql .= ",";
		}
		
		if(is_array($where)){
			foreach($where as $field=>$value){
				$where_field_arr[]=$field." = ? ";
				$value_arr[]=$value;
			}
			$sql = "update {$table} set {$pre_sql} ".implode(",",$update_field_arr)." where ".implode("and ",$where_field_arr);	
		}else{
			$sql = "update {$table} set {$pre_sql} ".implode(",",$update_field_arr)." {$where}";
			$value_arr = array_merge($value_arr,$where_para);
		}
		
		
		$data = self::exute_query($sql,$value_arr);
		return $data;
	}

	public static function del($where,$table){
		foreach($where as $key => $val){
			$where_field_arr[] = $key." = ?";
			$where_value_arr[] = $val;
		}
		$sql = "delete from {$table} where ".implode("and ",$where_field_arr)."";
		$data =  self::exute_query($sql,$where_value_arr);
		return $data;
	}

	public static function exute_query($str,$arr = array(),$check = 0){
		if(self::$conn===null)new DB;
		try{
			$result = self::$conn->prepare($str);
			$result->execute($arr);
			
			// var_dump('init2',$str,$arr);
			
			
			$data = $result -> rowCount();
			// var_dump($result) ;
			if(is_array($arr)){
				foreach($arr as $key =>$val){
					if(strlen($val)==0){
						$replace = "''";
					}else{
						$replace = "'".$val."'";
					}
					$str = preg_replace('/\?/',$replace,$str,1);
				}
				self::$db_str[] =  str_replace(["\r\n","\r","\n","\t"]," ", $str);
				if($check && $data){
					$tmp_data = $result ->fetchAll(\PDO::FETCH_ASSOC);
					$data = $tmp_data;
				}
				return $data;
			}
		}catch(PDOException $e){
			var_dump($e);
			exit;
		}
	}

	public static function db_str(){
		$data = 0;
		if(count(DB::$db_str)){
			$data = DB::$db_str;
		}
		return $data;
	}

	public static function locktable($table){
		$sql = "LOCK TABLES {$table} WRITE";
		$data = self::exute_query($sql);
		return $data;
	}

	public static function unlocktable(){
		$sql = 'UNLOCK TABLES ';
		$data = self::exute_query($sql);
		return $data;
	}
	
	public static function beginTransaction(){
        if (self::$conn === null) new DB;
        self::$conn->beginTransaction();
    }

    public static function commit(){
        if (self::$conn === null) new DB;
        self::$conn->commit();
    }

}
