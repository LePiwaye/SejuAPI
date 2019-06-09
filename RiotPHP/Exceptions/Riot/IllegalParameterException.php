<?php
/**
 * This class extends the PHP base Exception class to tell the user there's a problem with the provided Server data.
 * It's usually related to a wrongly-named server
 */

namespace RiotPHP\Exceptions\Riot;


class IllegalParameterException extends \Exception
{
    public function __construct($parameterName){
        parent::__construct("The " . $parameterName . " has a wrong type. Make sure the specified parameter has the correct type.");
    }
}