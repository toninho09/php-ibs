<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/09/16
 * Time: 21:44
 */

namespace PHPIBS;


use PHPIBS\Common\ResponseObject;
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
    protected $requestObject;

    /**
     * @param InputHandleInterface $inputHandle
     */
    public function setInputHandle(InputHandleInterface $inputHandle)
    {
        $this->inputHandle = $inputHandle;
        $this->requestObject = null;
    }

    public function setRequestObject($rest){
        $this->requestObject = $rest;
    }

    public function executeMethod()
    {
        $requestObject = !empty($this->requestObject)?$this->requestObject : $this->inputHandle->getObject();
        $className = $requestObject->getClassFullName();
        $class = new $className;
        return call_user_func_array([$class, $requestObject->getMethod()], $requestObject->getDecodedParams());
    }

    /**
     * @return ResponseObject
     */
    public function run()
    {
        $response = new ResponseObject();
        $response->setResponse($this->executeMethod());
        return $response;
    }

}