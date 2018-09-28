<?php
namespace Poplar\Core\AbstractInterface;

/**
 * @author yangxiaogang 2018-09-28
 */

 	
trait Singleton  
{
	
	private static $instance = null;

	/**
	 * [getInstance description]
	 * @author yangxiaogang 2018-09-28
	 * @return [type] [description]
	 */
	function getInstance(...$args)
	{
		if( is_null(self::$instance) )
		{
			self::$instance = new self(..$args);
		}
		return self::$instance;
	}
	
}