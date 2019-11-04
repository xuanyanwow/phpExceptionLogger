<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/4 0004
 * Time: 19:44
 */

namespace Siam\ExceptionLogger\Utility;


trait Single
{
    private static $instance;
    static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new static();
        }
        return self::$instance;
    }
}