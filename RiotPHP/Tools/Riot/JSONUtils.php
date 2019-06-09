<?php

namespace RiotPHP\Tools\Riot;

/**
 * This class manages everything that might be related to JSON data : Parsing, writing, reading,...
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class JSONUtils
{
    public function readJSONFile($pathToFile){
        $data = file_get_contents($pathToFile);
        if($data === false){
            return null;
        }
        return $data;
    }

    /**
     * Converts a JSON string into an associative PHP array
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @param $JSONData String Entry JSON data
     * @throws \RiotPHP\Exceptions\Riot\BadJSONDataException if the JSON data provided is not properly formatted
     * @return mixed|null Converted JSON into array. This will return null if the provided data isn't a proper JSON string.
     */
    public function parseJSONToArray($JSONData){
        $parsedJSON = json_decode($JSONData, true);
        if ($parsedJSON == null){
            throw new \RiotPHP\Exceptions\Riot\BadJSONDataException();
        }
        return $parsedJSON;
    }
}