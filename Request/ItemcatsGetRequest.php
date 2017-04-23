<?php

namespace Ftx\Request;

use Ftx\IRequest;
use Ftx\RequestCheckUtil;


/**
 * TOP API: taobao.itemcats.get request
 */
class ItemcatsGetRequest implements IRequest
{

    private $fields;

    private $parentCid;

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

    public function getParentCid()
    {
        return $this->parentCid;
    }

    public function setParentCid($parentCid)
    {
        $this->parentCid = $parentCid;
        $this->apiParas['parent_cid'] = $parentCid;
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
        return 'ftxia.itemcats.get';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkMaxListSize($this->cids, 1000, "cids");
        RequestCheckUtil::checkMaxValue($this->parentCid, 9223372036854775807, "parentCid");
        RequestCheckUtil::checkMinValue($this->parentCid, 0, "parentCid");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
