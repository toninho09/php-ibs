<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/09/16
 * Time: 22:08
 */

namespace PHPIBS\Common;


class Header
{
    public $authType;
    public $auth;
    public $from;
    public $date;
    public $paramsEncode;
    public $requestEncode;
    /**
     * Header constructor.
     */
    public function __construct()
    {
        $this->authType = AuthType::NONE;
        $this->auth = new Auth();
        $this->from = $_SERVER['SERVER_NAME'];
        $this->date = date('Y-m-d H:i:s');
        $this->paramsEncode = SuportedEncode::SERIAL;
        $this->requestEncode = SuportedEncode::SERIAL;
    }
}