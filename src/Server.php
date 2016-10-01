<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/09/16
 * Time: 21:44
 */

namespace PHPIBS;


use PHPIBS\Server\Handle\Input\InputHandleInterface;

/**
 * Class Server
 * This Class get the intercepted object by InputHandleInterce, and call the destine class to complete this requisition
 * @package PHPIBS
 */
class Server
{

    /**
     * @var InputHandleInterface
     */
    protected $inputHandle;

    /**
     * @param InputHandleInterface $inputHandle
     */
    public function setInputHandle(InputHandleInterface $inputHandle)
    {
        $this->inputHandle = $inputHandle;
    }


    public function run(){
        $requestObject = $this->inputHandle->getObject();

    }


}