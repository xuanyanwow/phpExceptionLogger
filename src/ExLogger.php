<?php
/**
 * Created by PhpStorm.
 * User: Siam
 * Date: 2019/11/4 0004
 * Time: 19:42
 */

namespace Siam\ExceptionLogger;


use Siam\ExceptionLogger\Utility\DriverInterface;
use Siam\ExceptionLogger\Utility\logBean;
use Siam\ExceptionLogger\Utility\Single;

class ExLogger extends DriverInterface
{
    use Single;

    /** @var DriverInterface */
    private $driver;

    public function driver(DriverInterface $driver)
    {
        $this->driver = $driver;
        return $this;
    }


    /**
     * 执行数据记录
     * @param LogBean $log
     * @return bool
     */
    public function log(LogBean $log): bool
    {
        return $this->driver->log($log);
    }

    /**
     * 获取列表
     * @param int $page
     * @param int $limit
     * @return array
     */
    public function getPageList($page = 1, $limit = 10): array
    {
        return $this->driver->getPageList($page, $limit);
    }

    /**
     * 根据id获取所有详情
     * @param $id
     * @return logBean
     */
    public function getById($id): logBean
    {
        return $this->driver->getById($id);
    }

    /**
     * 删除所有数据
     * @return mixed
     */
    public function deleteAll()
    {
        return $this->driver->deleteAll();
    }
}