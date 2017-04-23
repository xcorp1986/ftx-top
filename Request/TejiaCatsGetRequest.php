<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.tejia.cats.get request
 */
class TejiaCatsGetRequest implements IRequest
{
    private $fields;

    private $pid;

    private $apiParas = [];

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
        $this->apiParas['fields'] = $fields;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function setPid($pid)
    {
        $this->pid = $pid;
        $this->apiParas['pid'] = $pid;
    }

    public function setTime($time)
    {
        $this->time = $time;
        $this->apiParas['time'] = $time;
    }

    public function getTime()
    {
        return $this->time;
    }


    public function getApiMethodName()
    {
        return 'ftxia.tejia.cats.get';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

}