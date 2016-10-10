<?php
/**
 * User: antonio
 * Date: 06/10/16
 * Time: 23:57
 */

namespace PHPIBS\Parser\RequestObject;


use PHPIBS\Common\ResponseObject;

class JsonParser implements ResponseObjectParseInterface
{

    /**
     * @param $data
     * @return ResponseObject
     */
    public function parser($data)
    {
        $response = json_decode($data);
        $responseObject = new ResponseObject();
        $responseObject->setDate($response->header->date);
        $responseObject->setResponseEncode($response->header->responseEncode);
        $responseObject->setFrom($response->header->from);
        $responseObject->content->response = $response->content->response;
        if($response->exception->hasException){
            $responseObject->setExeption(new \Exception($response->exception->exceptionMessage,$response->exception->exceptionCode));
        }
        return $responseObject;
    }
}