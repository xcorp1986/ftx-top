<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.brands.uid.get request
 */
class BrandsUidGetRequest implements IRequest
{
    private $fields;

    private $uid;

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

    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
        $this->apiParas['uid'] = $uid;
    }

    public function getApiMethodName()
    {
        return 'ftxia.brands.uid.get';
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