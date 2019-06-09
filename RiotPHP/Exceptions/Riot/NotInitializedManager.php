<?php
/**
 * This class extends the PHP base Exception class.
 * It is usually fired when a Manager hasn't been initialized yet.
 * This kind of Exception should not be fired on runtime environment, but in development environment,
 * since it means there is an issue with the RiotPHP->initializeManagers() method
 * @see \RiotPHP\RiotPHP->initializeManagers()
 */

namespace RiotPHP\Exceptions\Riot;


class NotInitializedManager extends \Exception
{
    public function __construct(){
        parent::__construct("This manager hasn't been initialized yet. Please refer to the initializeManagers() method after setting the RiotServer's current server.");
    }
}