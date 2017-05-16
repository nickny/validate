<?php
/**
 * User: Sammy Lee
 * Date: 2016/9/6
 * Time: 11:43
 */
namespace Nickny\Validate;

class Ext {

    public static function is_mobile($mobile)
	{
		if(preg_match("/^1[34578]{1}\d{9}$/",$mobile)){  
			return true;
		}else{  
			return false;  
		}
	}

}
