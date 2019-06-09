<?php
/**
 * This class extends the PHP base Exception class to tell the user there's a problem with the provided Server data.
 * It's usually related to a wrongly-named server
 */

namespace RiotPHP\Exceptions\Riot;


class IllegalServerException extends \Exception
{
    public function __construct(){
        parent::__construct("You specified a server that isn't described into the Servers.json file. Please check that you" .
        " provided a legal server.");
    }
}