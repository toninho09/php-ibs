<?php
/**
 * User: antonio
 * Date: 06/10/16
 * Time: 23:57
 */

namespace PHPIBS\Parser\RequestObject;


use PHPIBS\Common\ResponseObject;

interface ResponseObjectParseInterface
{

    /**
     * @param $data
     * @return ResponseObject
     */
    public function parser($data);
}