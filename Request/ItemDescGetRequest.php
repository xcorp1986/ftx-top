<?php

namespace Ftx\Request;

use Ftx\IRequest;
use Ftx\RequestCheckUtil;


/**
 * TOP API: ftxia.item.desc.get request
 */
class ItemDescGetRequest implements IRequest
{

    private $fields;

    private $numIid;

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

    public function getNumIid()
    {
        return $this->numIid;
    }

    public function setNumIid($numIid)
    {
        $this->numIid = $numIid;
        $this->apiParas['num_iid'] = $numIid;
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
        return 'ftxia.item.desc.get';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->fields, "fields");
        RequestCheckUtil::checkMinValue($this->numIid, 1, "numIid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

}