<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/09/16
 * Time: 21:49
 */

namespace PHPIBS\Common;


/**
 * Class RequestObject
 * -header
 * --authType
 * --auth
 * ---user
 * ---pass
 * ---token
 * --from
 * --date
 * --paramsEncode
 * --responseEncode
 * -content
 * --namespace
 * --service
 * --method
 * --params
 * @package PHPIBS\Common
 */
class RequestObject
{
    public $header;
    public $content;
    protected $encode;

    /**
     * RequestObject constructor.
     * @param $header
     */
    public function __construct()
    {
        $this->header = new HeaderRequest();
        $this->content = new ContentRequest();
        $this->encode = new Encode\Encoder();
    }

    public function setAuthType($type)
    {
        $this->header->authType = $type;
    }

    public function setAuth(Auth $auth)
    {
        $this->header->auth = $auth;
    }

    public function setFrom($from)
    {
        $this->header->from = $from;
    }

    public function setDate($date)
    {
        $this->header->date = $date;
    }

    public function setParamsEncode($encode)
    {
        $this->header->paramsEncode = $encode;
    }

    public function setresponseEncode($encode)
    {
        $this->header->responseEncode = $encode;

    }

    public function setNamespace($namespace)
    {
        $this->content->namespace = $namespace;
    }

    public function setService($service)
    {
        $this->content->service = $service;
    }

    public function setMethod($method)
    {
        $this->content->method = $method;
    }

    public function setParams(array $params)
    {
        $this->content->params = $this->encode->encode($this->header->paramsEncode, $params);
    }

    public function getDecodedParams()
    {
        return $this->encode->decode($this->header->paramsEncode,$this->content->params);
    }

    public function getClassFullName(){
        return $this->content->namespace.$this->content->service;
    }

    public function getMethod(){
        return $this->content->method;
    }

    public function toJson(){
        return json_encode($this);
    }
}