<?php

/**
 * User: antonio
 * Date: 10/10/16
 * Time: 00:42
 */
class ClientTest extends PHPUnit_Framework_TestCase
{
    public function testClientObject(){
        $request = new \PHPIBS\Common\RequestObject();
        $request->setService('\Tests\TestClass');
        $request->setMethod('sum');
        $request->setParams([1,2]);
        $json = $request->toJson();

        $this->assertEquals($request->getDecodedParams(),[1,2]);

        $className = $request->getClassFullName();
        $class = new $className;
        $return = call_user_func_array([$class, $request->getMethod()], $request->getDecodedParams());

        $this->assertEquals($return,3);


    }

    public function testCall(){
        $request = new \PHPIBS\Common\RequestObject();
        $request->setService('\Tests\TestClass');
        $request->setMethod('sum');
        $request->setParams([1,2]);

        $server = new \PHPIBS\Server();
        $server->setRequestObject($request);
        $value = $server->executeMethod();

        $this->assertEquals($value,3);
        $response = $server->run();
        $json = $response->toJson();
        $this->assertEquals($response->getDecodedResponse(),3);
    }
}
