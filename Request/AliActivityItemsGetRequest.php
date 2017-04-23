<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.aliactivity.items.get request
 */
class AliActivityItemsGetRequest implements IRequest
{
    private $fields;

    private $pageNo;

    private $pid;

    private $eventid;

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

    public function getEventid()
    {
        return $this->eventid;
    }

    public function setEventid($eventid)
    {
        $this->eventid = $eventid;
        $this->apiParas['eventid'] = $eventid;
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

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas['page_no'] = $pageNo;
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
        return 'ftxia.aliactivity.items.get';
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