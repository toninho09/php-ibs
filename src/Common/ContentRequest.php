<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 05/10/16
 * Time: 22:02
 */

namespace PHPIBS\Common;


class ContentRequest
{
    public $namespace;
    public $service;
    public $method;
    public $params;
    /**
     * Content constructor.
     */
    public function __construct()
    {
        $this->namespace = '';
        $this->service = '';
        $this->method = '';
        $this->params = '';
    }
}