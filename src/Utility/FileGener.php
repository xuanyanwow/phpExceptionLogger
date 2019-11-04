<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/4 0004
 * Time: 20:26
 */

namespace Siam\ExceptionLogger\Utility;


class FileGener
{
    public static function makeDir($path,$mode = 0777)
    {
        if (is_dir($path) || @mkdir($path, $mode)) return TRUE;
        if (!self::makeDir(dirname($path), $mode)) return FALSE;
        return @mkdir($path, $mode);
    }
}