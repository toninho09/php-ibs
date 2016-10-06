<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 05/10/16
 * Time: 22:04
 */

namespace PHPIBS\Common\Encode\Handle;


class SerialEncode implements EncodeInterface
{

    public function encode($data)
    {
        return serialize($data);
    }

    public function decode($data)
    {
        return unserialize($data);
    }
}