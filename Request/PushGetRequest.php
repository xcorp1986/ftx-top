<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 *  API: ftxia.push.get request
 */
class PushGetRequest implements IRequest
{

    private $keys;
    private $msg;
    private $apiParas = [];

    public function getKeys()
    {
        return $this->keys;
    }

    public function setKeys($keys)
    {
        $this->keys = $keys;
        $this->apiParas['keys'] = $keys;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;
        $this->apiParas['msg'] = $msg;
    }

    public function getApiMethodName()
    {
        return 'ftxia.push.get';
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
