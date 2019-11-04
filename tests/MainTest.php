<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/4 0004
 * Time: 20:36
 */

namespace Siam\ExceptionLogger\Test;
require "../vendor/autoload.php";

use Siam\ExceptionLogger\Config;
use Siam\ExceptionLogger\Driver\File;
use Siam\ExceptionLogger\Utility\LogBean;

class MainTest
{

    public function log()
    {
        $config = new Config();
        $config->setTempPath(dirname(__FILE__));
        $driver = new File($config);
        $log = new LogBean();

        var_dump($driver->log($log));
    }
    public function deleteAll(){
        $config = new Config();
        $config->setTempPath(dirname(__FILE__));
        $driver = new File($config);

        var_dump($driver->deleteAll());
    }

    public function getPageList()
    {

        $config = new Config();
        $config->setTempPath(dirname(__FILE__));
        $driver = new File($config);

        var_dump($driver->getPageList());
    }

    public function getById()
    {
        $config = new Config();
        $config->setTempPath(dirname(__FILE__));
        $driver = new File($config);

        var_dump($driver->getById("key_15728726959015"));
    }
}

(new MainTest())->getById();