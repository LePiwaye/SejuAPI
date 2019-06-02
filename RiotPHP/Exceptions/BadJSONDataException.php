<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 24/12/17
 * Time: 19:31
 *
 * This class extends the PHP base Exception class to tell the user there's a problem with the provided JSON data.
 */

namespace RiotPHP\Exceptions;


class BadJSONDataException extends \Exception
{
    public function __construct(){
        parent::__construct("The provided data isn't considered as legal JSON. Please check your input format.");
    }
}