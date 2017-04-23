<?php

namespace Ftx\Request;

use Ftx\IRequest;


/**
 * TOP API: ftxia.itemdetail.get request
 */
class ItemDetailGetRequest implements IRequest
{

    private $num_iid;
    private $apiParas = [];

    public function getNumiid()
    {
        return $this->num_iid;
    }

    public function setNumiid($num_iid)
    {
        $this->num_iid = $num_iid;
        $this->apiParas['num_iid'] = $num_iid;
    }

    public function getApiMethodName()
    {
        return 'ftxia.itemdetail.get';
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
