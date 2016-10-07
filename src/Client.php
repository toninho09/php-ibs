<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/09/16
 * Time: 21:43
 */

namespace PHPIBS;


use PHPIBS\Common\RequestObject;
use PHPIBS\Parser\RequestObject\JsonParser;

class Client
{
    protected $client;
    protected $endpoint;
    protected $parser;

    /**
     * Client constructor.
     * @param $client
     */
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        $this->parser = new JsonParser();
    }

    public function sendRequest(RequestObject $request){
        $response = $this->client->post($this->endpoint,[
            'json'=>$request->toJson()
        ]);

        return $this->parser->parser($response->getBody());
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param mixed $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }


}