<?php
namespace Poplar\Core;

/**
 * [yang 内核代码]
 * @author yangxiaogang 2018-09-28
 */



class Core
{
	use Singleton;


	function __construct()
	{	
		 
		// 定义swoole版本常量
		defined('SWOOLE_VERSION') or define('SWOOLE_VERSION', intval( phpversion('swoole') ));

		//定义项目根
		defined('POPLAR_ROOT') or define('EASYSWOOLE_ROOT',realpath(getcwd()));

		
		
	}


 }