<?php
/**
 * This class extends the PHP base Exception class.
 * It is usually fired when a call to an API hasn't returned proper answer
 */

namespace SejuAPI\Exceptions\Riot\Network;


class ServiceUnavailableException extends \Exception
{
    public function __construct(){
        parent::__construct("Service unavailable (HTTP Code 503)");
    }
}