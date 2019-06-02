<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 24/12/17
 * Time: 19:31
 *
 * This class extends the PHP base Exception class.
 * It is usually fired when a Manager hasn't been initialized yet.
 * This kind of Exception should not be fired on runtime environment, but in development environment,
 * since it means there is an issue with the RiotServer/initializeManagers() method
 * @see \RiotPHP\RiotServer->initializeManagers()
 */

namespace RiotPHP\Exceptions;


class NotInitializedManager extends \Exception
{
    public function __construct(){
        parent::__construct("This manager hasn't been initialized yet. Please refer to the initializeManagers() method after setting the RiotServer's current server.");
    }
}