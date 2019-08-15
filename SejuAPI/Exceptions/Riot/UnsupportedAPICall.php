<?php
/**
 * This class extends the PHP base Exception class.
 * It is usually fired when a call to an API hasn't returned proper answer
 */

namespace SejuAPI\Exceptions\Riot;


class UnsupportedAPICall extends \Exception
{
    public function __construct(){
        parent::__construct("An unexpected error occured while dealing with an API Call Response");
    }
}