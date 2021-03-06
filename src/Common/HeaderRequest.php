<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/09/16
 * Time: 22:08
 */

namespace PHPIBS\Common;


class HeaderRequest
{
    public $authType;
    public $auth;
    public $from;
    public $date;
    public $paramsEncode;
    public $responseEncode;
    /**
     * Header constructor.
     */
    public function __construct()
    {
        $this->authType = AuthType::NONE;
        $this->auth = new Auth();
        $this->from = isset($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:'';
        $this->date = date('Y-m-d H:i:s.u');
        $this->paramsEncode = SuportedEncode::SERIAL;
        $this->responseEncode = SuportedEncode::SERIAL;
    }
}