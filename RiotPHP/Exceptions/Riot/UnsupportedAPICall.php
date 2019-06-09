<?php
/**
 * This class extends the PHP base Exception class.
 * It is usually fired when a call to an API hasn't returned proper answer
 */

namespace RiotPHP\Exceptions\Riot;


class UnsupportedAPICall extends \Exception
{
    public function __construct(){
        parent::__construct("This API call hasn't returned a response which is at the supposed format");
    }
}