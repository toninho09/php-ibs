<?php
/**
 * User: antonio
 * Date: 06/10/16
 * Time: 23:49
 */

namespace PHPIBS\Common;


class InterfaceException
{
    public $hasException;
    public $exceptionMessage;
    public $exceptionCode;

    /**
     * InterfaceException constructor.
     */
    public function __construct()
    {
        $this->hasException = false;
        $this->exceptionCode = '';
        $this->exceptionMessage = '';
    }
}