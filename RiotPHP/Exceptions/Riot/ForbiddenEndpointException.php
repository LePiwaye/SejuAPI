<?php
/**
 * This class extends the PHP base Exception class to tell the user the specified endpoint cannot be used with the specified server.
 */

namespace RiotPHP\Exceptions\Riot;


class ForbiddenEndpointException extends \Exception
{
    public function __construct(){
        parent::__construct("You cannot use this API on the provided server");
    }
}