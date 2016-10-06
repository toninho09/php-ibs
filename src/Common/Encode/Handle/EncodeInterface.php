<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 05/10/16
 * Time: 22:05
 */

namespace PHPIBS\Common\Encode\Handle;


interface EncodeInterface
{
    public function encode($data);
    public function decode($data);
}