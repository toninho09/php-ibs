<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 05/10/16
 * Time: 22:09
 */

namespace PHPIBS\Common\Encode;


use PHPIBS\Common\Encode\Handle\JsonEncode;
use PHPIBS\Common\Encode\Handle\SerialEncode;
use PHPIBS\Common\SuportedEncode;

class Encoder
{
    public function encode($type,$data){
        switch ($type){
            case SuportedEncode::SERIAL:
                $encode = new SerialEncode();
                return $encode->encode($data);

            case SuportedEncode::JSON:
                $encode = new JsonEncode($data);
                return $encode->encode($data);

            default:
                throw new UnSupportedEncodeException("Unsupported encoded method");
                break;
        }
    }

    public function decode($type,$data){

        switch ($type){
            case SuportedEncode::SERIAL:
                $encode = new SerialEncode();
                return $encode->decode($data);

            case SuportedEncode::JSON:
                $encode = new JsonEncode($data);
                return $encode->decode($data);

            default:
                throw new UnSupportedEncodeException("Unsupported decode method");
                break;
        }
    }

}