<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/09/16
 * Time: 21:48
 */

namespace PHPIBS\Server\Handle\Input;


use PHPIBS\Common\RequestObject;

/**
 * Interface InputHandleInterface
 * This interface get the return by stream, http, json, and return one RequestObject
 * @package PHPIBS\Handle\Input
 */
interface InputHandleInterface
{

    /**
     * @return RequestObject
     */
    public function getObject();
}