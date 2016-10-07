<?php
/**
 * User: antonio
 * Date: 07/10/16
 * Time: 00:10
 */

namespace PHPIBS\Server\Handle\Input;


use PHPIBS\Common\RequestObject;

class JsonInput implements InputHandleInterface
{

    /**
     * @return RequestObject
     */
    public function getObject()
    {
        $json = file_get_contents('php://input');

        /** @var RequestObject $object */
        $object = json_decode($json);
        $request = new RequestObject();
        $request->setAuthType($object->header->authType);
        $request->setAuth($object->header->auth);
        $request->setFrom($object->header->from);
        $request->setDate($object->header->date);
        $request->setParamsEncode($object->header->paramsEncode);
        $request->setresponseEncode($object->header->responseEncode);
        $request->setNamespace($object->content->namespace);
        $request->setService($object->content->service);
        $request->setMethod($object->content->method);
        $request->content->params = $object->content->params;
        return $request;
    }
}