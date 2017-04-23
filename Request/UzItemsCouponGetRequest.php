<?php

namespace Ftx\Request;

use Ftx\IRequest;
use Ftx\RequestCheckUtil;


/**
 *  API: ftxia.uz.items.coupon.get request
 */
class UzItemsCouponGetRequest implements IRequest
{
    private $fields;
    private $uid;
    private $pageNo;
    private $cateId;
    private $yg;

    private $time;
    private $apiParas = [];

    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
        $this->apiParas['uid'] = $uid;
    }

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

    public function getCateid()
    {
        return $this->cateId;
    }

    public function setCateid($cateid)
    {
        $this->cateId = $cateid;
        $this->apiParas["cate_id"] = $cateid;
    }

    public function getYg()
    {
        return $this->yg;
    }

    public function setYg($yg)
    {
        $this->yg = $yg;
        $this->apiParas['yg'] = $yg;
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
        return 'ftxia.uz.items.coupon.get';
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
