<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/4 0004
 * Time: 19:41
 */

namespace Siam\ExceptionLogger;


use EasySwoole\Spl\SplBean;

class Config extends SplBean
{
    private $tempPath;

    /**
     * @return mixed
     */
    public function getTempPath()
    {
        return $this->tempPath;
    }

    /**
     * @param mixed $tempPath
     */
    public function setTempPath($tempPath)
    {
        $this->tempPath = $tempPath;
    }

}