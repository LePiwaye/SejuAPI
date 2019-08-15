<?php

namespace SejuAPI\Tools\Riot;

/**
 * Class ConfigManager - Manages everything that is related to the configuration files.
 * @package SejuAPI
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
     * @throws \SejuAPI\Exceptions\Riot\BadJSONDataException If the conf/Key.json isn't properly formatted anymore
     */
    public function getAPIKey(){
        $JU = new \SejuAPI\Tools\Riot\JSONUtils();
        return $JU->parseJSONToArray($JU->readJSONFile("../conf/Key.json"))["APIKey"];
    }
}