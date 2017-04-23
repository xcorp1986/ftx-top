<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.taoquan.get request
 */
class TaoQuanGetRequest implements IRequest
{

    private $sid;
    private $apiParas = [];

    public function getSid()
    {
        return $this->sid;
    }

    public function setSid($sid)
    {
        $this->sid = $sid;
        $this->apiParas['sid'] = $sid;
    }

    public function getApiMethodName()
    {
        return 'ftxia.taoquan.get';
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
