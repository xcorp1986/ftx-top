<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.meili.cats.get request
 */
class MeilicatsGetRequest implements IRequest
{

    private $fields;

    private $cid;

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

    public function getCid()
    {
        return $this->cid;
    }

    public function setCid($cid)
    {
        $this->cid = $cid;
        $this->apiParas['cid'] = $cid;
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
        return 'ftxia.meili.cats.get';
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
