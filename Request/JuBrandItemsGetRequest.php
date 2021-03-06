<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.ju.branditems.get request
 */
class JuBrandItemsGetRequest implements IRequest
{
    private $fields;

    private $sid;

    private $time;

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

    public function getSid()
    {
        return $this->sid;
    }

    public function setSid($sid)
    {
        $this->sid = $sid;
        $this->apiParas['sid'] = $sid;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
        $this->apiParas['time'] = $time;
    }

    public function getApiMethodName()
    {
        return 'ftxia.ju.branditems.get';
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