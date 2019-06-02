<?php

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
     * @param \RiotPHP\Collections\QueryHeader $queryHeader 
     * @param Object $inFile Loaded file resource to be pushed through PUT instruction. Defaults to null
     * @param int $infileSize Size in octets of the file to be pushed through PUT instruction. Defaults to zero
     * @return array Query result, formatted as $returnFormat
     * @throws \RiotPHP\Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function sendQuery($queryHeader, $queryURI, $inFile = null, $infileSize = 0){
        $confManager = new \RiotPHP\Tools\ConfigManager();
        $curlFetcher = curl_init($queryURI);

        //Passation de type de requête
        switch($queryHeader){
            case \RiotPHP\Collections\QueryHeader::GET:
                curl_setopt($curlFetcher, CURLOPT_HTTPGET, true);
                curl_setopt($curlFetcher, CURLOPT_POST, false);
                curl_setopt($curlFetcher, CURLOPT_PUT, false);
                break;
            case \RiotPHP\Collections\QueryHeader::PUT:
                curl_setopt($curlFetcher, CURLOPT_HTTPGET, false);
                curl_setopt($curlFetcher, CURLOPT_POST, false);
                curl_setopt($curlFetcher, CURLOPT_PUT, true);
                curl_setopt($curlFetcher, CURLOPT_INFILE, $inFile);
                curl_setopt($curlFetcher, CURLOPT_INFILESIZE, $infileSize);
                break;
            case \RiotPHP\Collections\QueryHeader::POST:
                curl_setopt($curlFetcher, CURLOPT_HTTPGET, false);
                curl_setopt($curlFetcher, CURLOPT_POST, true);
                curl_setopt($curlFetcher, CURLOPT_PUT, false);
                break;
            default:
                //Fallback on GET query
                curl_setopt($curlFetcher, CURLOPT_HTTPGET, true);
                curl_setopt($curlFetcher, CURLOPT_POST, false);
                curl_setopt($curlFetcher, CURLOPT_PUT, false);
                break;
        }

        curl_setopt($curlFetcher, CURLOPT_RETURNTRANSFER, 1);        
        curl_setopt($curlFetcher, CURLOPT_HTTPHEADER, array(
            'X-Riot-Token: ' . $confManager->getAPIKey()
        ));

        
        return json_decode(curl_exec($curlFetcher), true);
      
    }
}