<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/4 0004
 * Time: 20:04
 */

namespace Siam\ExceptionLogger\Driver;


use Siam\ExceptionLogger\Utility\DriverInterface;
use Siam\ExceptionLogger\Utility\Exception;
use Siam\ExceptionLogger\Utility\FileGener;
use Siam\ExceptionLogger\Utility\LogBean;

class File extends DriverInterface
{

    /**
     * 执行数据记录
     * @param LogBean $log
     * @return bool
     * @throws Exception
     */
    public function log(LogBean $log): bool
    {
        $path = $this->config->getTempPath();

        $file = $path.DIRECTORY_SEPARATOR.'siam'.DIRECTORY_SEPARATOR;

        if (FileGener::makeDir($file) === false){
            throw new Exception("temp path is required");
        }


        list($usec, $sec) = explode(" ", microtime());
        $usec = ((float)$usec + (float)$sec) * 10000;

        if (!is_file($file."exception_logger_list.txt")){
            $oldList = "{}";
        }else{
            $oldList = file_get_contents($file."exception_logger_list.txt") ?? "{}";
        }

        $oldList = json_decode($oldList, true);

        $oldList["key_$usec"] = $log->getMini();


        file_put_contents($file."exception_logger_list.txt", json_encode($oldList, 256));
        file_put_contents($file.md5("key_$usec").".txt", $log->__toString());
        return true;
    }

    /**
     * 获取列表
     * @param int $page
     * @param int $limit
     * @return array
     */
    public function getPageList($page = 1, $limit = 10): array
    {
        $path = $this->config->getTempPath();
        $file = $path.DIRECTORY_SEPARATOR.'siam'.DIRECTORY_SEPARATOR;

        if (!is_file($file."exception_logger_list.txt")){
            $oldList = "{}";
        }else{
            $oldList = file_get_contents($file."exception_logger_list.txt") ?? "{}";
        }

        $oldList = json_decode($oldList, true);
        $start   = ($page - 1) * $limit;

        return array_slice($oldList, $start, $limit);

    }

    /**
     * 根据id获取所有详情
     * @param $id
     * @return LogBean
     */
    public function getById($id): LogBean
    {
        $path = $this->config->getTempPath();

        $file = $path.DIRECTORY_SEPARATOR.'siam'.DIRECTORY_SEPARATOR;

        $filePaht = $file.md5("$id").".txt";
        if (!is_file($filePaht)){
            die("id file not exists");
        }
        $data = json_decode(file_get_contents($filePaht), true);
        return new LogBean($data);
    }

    /**
     * 删除所有数据
     * @return mixed
     */
    public function deleteAll()
    {
        $path = $this->config->getTempPath();
        $file = $path.DIRECTORY_SEPARATOR.'siam'.DIRECTORY_SEPARATOR."exception_logger_list.txt";

        if (is_file($file)){
            $res = unlink($file);
            if ($res == false){
                return false;
            }
        }
        // 删除目录下所有文件
        array_map('unlink', glob($path.DIRECTORY_SEPARATOR.'siam'.DIRECTORY_SEPARATOR."*"));
        return true;
    }
}