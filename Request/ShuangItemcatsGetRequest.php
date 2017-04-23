<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.shuang.itemcats.get request
 */
class ShuangItemcatsGetRequest implements IRequest
{
    private $fields;

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

    public function getApiMethodName()
    {
        return 'ftxia.shuang.itemcats.get';
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
