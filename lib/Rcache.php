<?php
use Redis;


class Rcache {
	private static $conn = null;	
	private static $server = '127.0.0.1';
	private static $port = 6379;
	private static $unixfile = '/dev/shm/redis-server.sock';
	private static $auth = 'misystemredis';
	private static $prefix = 'biotree';
	
		
	public static function init()
	{
		if (is_null(self::$conn) || self::$conn->ping()!==true ) { 
			self::$conn = new Redis();
			self::$conn->pconnect(static::$server, static::$port);
			// self::$conn->connect(static::$unixfile);
			self::$conn->auth(static::$auth);
			
			self::$conn->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP); 
			self::$conn->setOption(Redis::OPT_PREFIX, static::$prefix); 
		}
		return self::$conn;
	} 

	public static function  __callStatic($method, $parameters)
	{
		return (method_exists(static::init(), $method)) ? call_user_func_array(array(self::$conn, $method), $parameters): false;
	}
	
	public static function where_del($key)
	{
		$list = self::where($key);
		$num = count($list);
		foreach($list as $key => $val){
			$temp_key = str_ireplace(self::$prefix, '', $val);
			Rcache::del($temp_key);
		}

		return $num;
	}
	
	public static function where($key)
	{
		$search = $key.'*';
		$list = Rcache::keys($search);

		return $list;		
	}
	
	// 注入設定
	public static function _di($config)
	{
		static::$server = isset($config['server']) ? $config['server'] : static::$server;
		static::$port = isset($config['port']) ? $config['port'] : static::$port;
		static::$auth = isset($config['auth']) ? $config['auth'] : static::$auth;
		static::$prefix = isset($config['prefix']) ? $config['prefix'] : static::$prefix;
	}

	public static function remember($key, $callback, $expire = 0)
    {
        $data = Rcache::get($key);

        if ($data === false) {
            $data = $callback();
            Rcache::set($key, $data, 3600);
            if ($expire) {
                Rcache::expire($key, $expire);
            }
        }
        
        return $data;
    }

}