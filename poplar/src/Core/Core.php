<?php
namespace Poplar\Core;

/**
 * [yang 内核代码]
 * @author yangxiaogang 2018-09-28
 */
use Poplar\Core\AbstractInterface\Singleton;




class Core
{
	use Singleton;


	function __construct()
	{	
		// 定义swoole版本常量
		defined('SWOOLE_VERSION') or define('SWOOLE_VERSION', intval( phpversion('swoole') ));

		//定义项目根
		defined('POPLAR_ROOT') or define('POPLAR_ROOT',realpath(getcwd()));

		//载入配置
		if( file_exists(POPLAR_ROOT.'.env') )
		{
			$dotenv = new Dotenv\Dotenv(POPLAR_ROOT);
		} 	
	}


 }