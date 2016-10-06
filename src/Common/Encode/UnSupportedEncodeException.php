<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 06/10/16
 * Time: 00:58
 */

namespace PHPIBS\Common\encode;


use Exception;

class UnSupportedEncodeException extends \Exception
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}