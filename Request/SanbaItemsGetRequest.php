<?php

namespace Ftx\Request;

use Ftx\IRequest;
use Ftx\RequestCheckUtil;


/**
 * TOP API: ftxia.sanba.items.get request
 */
class SanbaItemsGetRequest implements IRequest
{

    private $fields;

    private $pageNo;

    private $cid;

    private $sort;

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

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas['page_no'] = $pageNo;
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

    public function getSort()
    {
        return $this->sort;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
        $this->apiParas['sort'] = $sort;
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
        return 'ftxia.sanba.items.get';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->fields, "fields");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
