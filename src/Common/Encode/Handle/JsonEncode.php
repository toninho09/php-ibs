<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 05/10/16
 * Time: 22:07
 */

namespace PHPIBS\Common\Encode\Handle;


class JsonEncode implements  EncodeInterface
{

    public function encode($data)
    {
        return json_encode($data);
    }

    public function decode($data)
    {
        return json_decode($data);
    }
}