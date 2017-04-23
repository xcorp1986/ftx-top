<?php


namespace Ftx;


interface IRequest
{

    public function getApiMethodName();

    public function check();

    public function getApiParas();

}