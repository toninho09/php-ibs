<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/09/16
 * Time: 22:15
 */

namespace PHPIBS\Common;


class Auth
{

    public $user;
    public $pass;
    public $token;

    /**
     * Auth constructor.
     */
    public function __construct()
    {
        $this->pass = null;
        $this->user = null;
        $this->token = null;
    }
}