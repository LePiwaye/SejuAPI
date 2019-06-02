<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 24/12/17
 * Time: 19:31
 *
 * This class extends the PHP base Exception class.
 * It is usually fired when a call to an API hasn't returned proper answer
 */

namespace RiotPHP\Exceptions;


class UnsupportedAPICall extends \Exception
{
    public function __construct(){
        parent::__construct("This API call hasn't returned a response which is at the supposed format");
    }
}