<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 04/01/18
 * Time: 11:11
 */

namespace RiotPHP\Tools;

/**
 * CallManager class - This class manages everything that is used to launch calls towards the Riot API.
 * @package Piwaye
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class CallManager
{
    /**
     * Sends a query to Riot servers and gets the resulting data
     * @param $queryURI String The called URI
     * @param int $returnFormat Set this parameter to ReturnFormat::JSON if you want your data set as JSON, or ReturnFormat::PHP if you want it parsed as a PHP array. If nothing is specified, this will return JSON data
     * @return array Query result, formatted as $returnFormat
     * @throws Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function sendQuery($queryURI, $returnFormat = Collections\ReturnFormat::JSON){
        $confManager = new \RiotPHP\Tools\ConfigManager();
        $curlFetcher = curl_init($queryURI);
        curl_setopt($curlFetcher, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlFetcher, CURLOPT_HTTPHEADER, array(
            'X-Riot-Token: ' . $confManager->getAPIKey()
        ));

        if($returnFormat == \RiotPHP\Collections\ReturnFormat::PHP){
            return json_decode(curl_exec($curlFetcher), true);
        }

        return curl_exec($curlFetcher);
    }
}