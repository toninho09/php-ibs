<?php
/**
 * User: antonio
 * Date: 06/10/16
 * Time: 23:44
 */

namespace PHPIBS\Common;


class HeaderResponse
{
    public $responseEncode;
    public $from;
    public $date;

    /**
     * HeaderResponse constructor.
     */
    public function __construct()
    {
        $this->responseEncode = SuportedEncode::SERIAL;
        $this->date = date('Y-m-d H:i:s.u');
        $this->from = $_SERVER['SERVER_NAME'];
    }
}