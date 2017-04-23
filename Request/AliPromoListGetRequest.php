<?php

namespace Ftx\Request;

use Ftx\IRequest;
use Ftx\RequestCheckUtil;


/**
 *  API: ftxia.alipromo.list.get request
 */
class AliPromoListGetRequest implements IRequest
{

    private $cid;                    //分类ID  16
    private $jhs;                    //是否聚划算  1
    private $fields;
    private $keyword;                //关键词  女
    private $pageNo;                //页码	1
    private $pageSize;                //每页大小 目前60
    private $shopType;                //是否天猫	1
    private $sort;                    //排序 normal renqi pricedesc priceasc volume ratedesc thirtyvolume
    private $ems;                    //是否包邮 1
    private $start_price;            //起始价格 1
    private $end_price;                //最高价格 999
    private $volume;                //最低销量 1
    private $start_commission_rate;    //最低佣金  1-99
    private $end_commission_rate;    //最高佣金	1-99
    private $time;
    private $hpay;                    //月成交转化率高于行业均值   1
    private $ratesum;                //卖家信誉  1-20
    private $npxtype;                //牛皮癣程度 0	1无 2轻微
    private $picquality;            //图片综合质量  1中 2高
    private $rlrate;                //商家让利      0-100  数值越大，商品越便宜
    private $apiParas = [];

    public function getRlrate()
    {
        return $this->rlrate;
    }

    public function setRlrate($rlrate)
    {
        $this->rlrate = $rlrate;
        $this->apiParas['rlrate'] = $rlrate;
    }

    public function getPicquality()
    {
        return $this->picquality;
    }

    public function setPicquality($picquality)
    {
        $this->picquality = $picquality;
        $this->apiParas['picquality'] = $picquality;
    }

    public function getNpxtype()
    {
        return $this->npxtype;
    }

    public function setNpxtype($npxtype)
    {
        $this->npxtype = $npxtype;
        $this->apiParas['npxtype'] = $npxtype;
    }

    public function getRatesum()
    {
        return $this->ratesum;
    }

    public function setRatesum($ratesum)
    {
        $this->ratesum = $ratesum;
        $this->apiParas['ratesum'] = $ratesum;
    }

    public function getHpay()
    {
        return $this->hpay;
    }

    public function setHpay($hpay)
    {
        $this->hpay = $hpay;
        $this->apiParas['hpay'] = $hpay;
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

    public function getJhs()
    {
        return $this->jhs;
    }

    public function setJhs($jhs)
    {
        $this->jhs = $jhs;
        $this->apiParas['jhs'] = $jhs;
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

    public function getKeyword()
    {
        return $this->keyword;
    }

    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        $this->apiParas['keyword'] = $keyword;
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

    public function getShopType()
    {
        return $this->shopType;
    }

    public function setShopType($shopType)
    {
        $this->shopType = $shopType;
        $this->apiParas['shop_type'] = $shopType;
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

    public function getEms()
    {
        return $this->ems;
    }

    public function setEms($ems)
    {
        $this->ems = $ems;
        $this->apiParas['ems'] = $ems;
    }

    public function getStartCommissionRate()
    {
        return $this->start_commission_rate;
    }

    public function setStartCommissionRate($start_commission_rate)
    {
        $this->start_commission_rate = $start_commission_rate;
        $this->apiParas['start_commission_rate'] = $start_commission_rate;
    }

    public function getEndCommissionRate()
    {
        return $this->end_commission_rate;
    }

    public function setEndCommissionRate($end_commission_rate)
    {
        $this->end_commission_rate = $end_commission_rate;
        $this->apiParas['end_commission_rate'] = $end_commission_rate;
    }

    public function getStartPrice()
    {
        return $this->start_price;
    }

    public function setStartPrice($start_price)
    {
        $this->start_price = $start_price;
        $this->apiParas['start_price'] = $start_price;
    }

    public function getEndPrice()
    {
        return $this->end_price;
    }

    public function setEndPrice($end_price)
    {
        $this->end_price = $end_price;
        $this->apiParas['end_price'] = $end_price;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        $this->apiParas['volume'] = $volume;
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
        return 'ftxia.alipromo.list.get';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->fields, 'fields');
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
