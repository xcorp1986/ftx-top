<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.upgrade.get request
 */
class UpgradeGetRequest implements IRequest
{

    private $release;

    private $time;

    private $apiParas = [];

    public function getRelease()
    {
        return $this->release;
    }

    public function setRelease($release)
    {
        $this->release = $release;
        $this->apiParas['release'] = $release;
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
        return 'ftxia.upgrade.get';
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