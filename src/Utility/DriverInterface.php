<?php
/**
 * 驱动
 * User: Siam
 * Date: 2019/11/4 0004
 * Time: 19:46
 */

namespace Siam\ExceptionLogger\Utility;


use Siam\ExceptionLogger\Config;

abstract class DriverInterface
{
    /** @var Config */
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
        return $this;
    }
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * 执行数据记录
     * @param LogBean $log
     * @return bool
     */
    abstract public function log(LogBean $log):bool;

    /**
     * 获取列表
     * @param int $page
     * @param int $limit
     * @return array
     */
    abstract public function getPageList($page = 1, $limit = 10):array;

    /**
     * 根据id获取所有详情
     * @param $id
     * @return LogBean
     */
    abstract public function getById($id):LogBean;

    /**
     * 删除所有数据
     * @return mixed
     */
    abstract public function deleteAll();
}