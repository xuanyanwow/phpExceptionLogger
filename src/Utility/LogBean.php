<?php
/**
 * log数据
 * User: Siam
 * Date: 2019/11/4 0004
 * Time: 19:47
 */

namespace Siam\ExceptionLogger\Utility;


use EasySwoole\Spl\SplBean;

class LogBean extends SplBean
{

    protected $createTime;
    protected $name;
    protected $files;
    protected $line;
    protected $message;
    protected $trace;
    protected $code;
    protected $source;
    protected $gets;
    protected $posts;
    protected $cookies;
    protected $sessions;
    protected $servers;
    protected $env;

    /**
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @param mixed $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->createTime = $createTime;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param mixed $files
     */
    public function setFiles($files)
    {
        $this->files = $files;
    }

    /**
     * @return mixed
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param mixed $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * @param mixed $trace
     */
    public function setTrace($trace)
    {
        $this->trace = $trace;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getGets()
    {
        return $this->gets;
    }

    /**
     * @param mixed $gets
     */
    public function setGets($gets)
    {
        $this->gets = $gets;
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param mixed $posts
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;
    }

    /**
     * @return mixed
     */
    public function getCookies()
    {
        return $this->cookies;
    }

    /**
     * @param mixed $cookies
     */
    public function setCookies($cookies)
    {
        $this->cookies = $cookies;
    }

    /**
     * @return mixed
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * @param mixed $sessions
     */
    public function setSessions($sessions)
    {
        $this->sessions = $sessions;
    }

    /**
     * @return mixed
     */
    public function getServers()
    {
        return $this->servers;
    }

    /**
     * @param mixed $servers
     */
    public function setServers($servers)
    {
        $this->servers = $servers;
    }

    /**
     * @return mixed
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @param mixed $env
     */
    public function setEnv($env)
    {
        $this->env = $env;
    }



    public function getMini()
    {
        return [
            'createTime'    => $this->createTime,
            'name'          => $this->name,
            'message'       => $this->message,
        ];
    }
}