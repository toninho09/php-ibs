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
 * --requestEncode
 * -content
 * --service
 * --method
 * --params
 * @package PHPIBS\Common
 */
class RequestObject
{
    public $header;
    public $content;

    /**
     * RequestObject constructor.
     * @param $header
     */
    public function __construct()
    {
        $this->header = new Header();
    }

}