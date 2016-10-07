<?php
/**
 * User: antonio
 * Date: 06/10/16
 * Time: 23:40
 */

namespace PHPIBS\Common;
use PHPIBS\Common\encode\Encoder;


/**
 * Class ResponseObject
 * -header
 * --responseEncode
 * --from
 * --date
 * -content
 * --response
 * -exception
 * --hasExeption
 * --exceptionMessage
 * --exceptionCode
 */

class ResponseObject
{
    public $header;
    public $content;
    public $exception;
    protected $encode;

    /**
     * ResponseObject constructor.
     */
    public function __construct()
    {
        $this->header = new HeaderResponse();
        $this->content = new ContentResponse();
        $this->exception = new InterfaceException();
        $this->encode = new Encoder();
    }

    public function setResponseEncode($encode)
    {
        $this->header->responseEncode = $encode;
    }

    public function setFrom($from)
    {
        $this->header->from = $from;
    }

    public function setDate($date){
        $this->header->date = $date;
    }

    public function setResponse($response)
    {
        $this->content->response = $response;
    }

    public function setExeption(\Exception $exception)
    {
        $this->exception->exceptionMessage = $exception->getMessage();
        $this->exception->exceptionCode = $exception->getCode();
        $this->exception->hasException = true;
    }

    public function getDecodedResponse()
    {
        return $this->encode->decode($this->header->responseEncode,$this->content->response);
    }

}