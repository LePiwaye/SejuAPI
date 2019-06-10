<?php
/**
 * This class extends the PHP base Exception class.
 * It is usually fired when a call to an API hasn't returned proper answer
 */

namespace RiotPHP\Exceptions\Riot\Network;


class RateLimitExceededException extends \Exception
{
    public function __construct(){
        parent::__construct("The API Call exceeded the rate limit (HTTP Code 429)");
    }
}