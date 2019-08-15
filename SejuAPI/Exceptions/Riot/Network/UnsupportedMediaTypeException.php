<?php
/**
 * This class extends the PHP base Exception class.
 * It is usually fired when a call to an API hasn't returned proper answer
 */

namespace SejuAPI\Exceptions\Riot\Network;


class UnsupportedMediaTypeException extends \Exception
{
    public function __construct(){
        parent::__construct("The provided data is in an incorrect type (HTTP Code 415)");
    }
}