<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 04/01/18
 * Time: 10:40
 */

namespace RiotPHP\Tools;

/**
 * Class ConfigManager - Manages everything that is related to the configuration files.
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ConfigManager
{
    /**
     * Returns the API key stored in the conf/Key.json file.
     * @author Piwaye
     * @version 1.0
     * @since 1.0
     * @return string API key
     * @throws Exceptions\BadJSONDataException If the conf/Key.json isn't properly formatted anymore
     */
    public function getAPIKey(){
        $JU = new \RiotPHP\Tools\JSONUtils();
        return $JU->parseJSONToArray($JU->readJSONFile("../conf/Key.json"))["APIKey"];
    }
}