<?php

namespace RiotPHP\Tools\Riot;

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
     * @param $endpointName \RiotPHP\Collections\Riot\EndpointDescriptor Specified endpoint
     * @param $serviceRegion \RiotPHP\Collections\Riot\Server Server which the API call is sent to
     * @param $queryHeader \RiotPHP\Collections\Riot\QueryHeader Query type (GET, PUT or POST, defaults to GET)
     * @param $queryURI String The called URI
     * @param \RiotPHP\Collections\Riot\QueryHeader $queryHeader 
     * @param Object $inFile Loaded file resource to be pushed through PUT instruction. Defaults to null
     * @param int $infileSize Size in octets of the file to be pushed through PUT instruction. Defaults to zero
     * @return array Query result
     * @throws \RiotPHP\Exceptions\Riot\ForbiddenEndpointException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function sendQuery($endpointName, $serviceRegion, $queryHeader, $queryURI, $inFile = null, $infileSize = 0){

        if(!$this->checkAPIAllowance($endpointName, $serviceRegion)){
            throw new \RiotPHP\Exceptions\Riot\ForbiddenEndpointException();
        }

        $confManager = new \RiotPHP\Tools\Riot\ConfigManager();
        $curlFetcher = curl_init($queryURI);

        //Request type
        switch($queryHeader){
            case \RiotPHP\Collections\Riot\QueryHeader::GET:
                curl_setopt($curlFetcher, CURLOPT_HTTPGET, true);
                curl_setopt($curlFetcher, CURLOPT_POST, false);
                curl_setopt($curlFetcher, CURLOPT_PUT, false);
                break;
            case \RiotPHP\Collections\Riot\QueryHeader::PUT:
                curl_setopt($curlFetcher, CURLOPT_HTTPGET, false);
                curl_setopt($curlFetcher, CURLOPT_POST, false);
                curl_setopt($curlFetcher, CURLOPT_PUT, true);
                curl_setopt($curlFetcher, CURLOPT_INFILE, $inFile);
                curl_setopt($curlFetcher, CURLOPT_INFILESIZE, $infileSize);
                break;
            case \RiotPHP\Collections\Riot\QueryHeader::POST:
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

        $resp = curl_exec($curlFetcher);

        $this->checkResponseHeader($curlFetcher);

        $JSONUtils = new \RiotPHP\Tools\Riot\JSONUtils();
        return $JSONUtils->parseJSONToArray($resp);
    }

    public function checkRateLimitations($forceRefresh = false){
        
    }

    /**
     * Checks if the $serviceRegion provided is allowed to run the $endpointName endpoint
     * @param $endpointName \RiotPHP\Collections\Riot\EndpointDescriptor Specified endpoint
     * @param $serviceRegion \RiotPHP\Collections\Riot\Server Server which the API call is sent to
     * @return boolean Allowance status
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    private function checkAPIAllowance($endpointName, $serviceRegion){

        $JSONUtils = new \RiotPHP\Tools\Riot\JSONUtils();
        $JSONData = $JSONUtils->readJSONFile("../conf/Servers.json");        

        if(!is_null($JSONData)){
            $parsedJSONArray = $JSONUtils->parseJSONToArray($JSONData);

            for($iterableResponse = 0; $iterableResponse < count($parsedJSONArray); $iterableResponse++){
                $serverArray = $parsedJSONArray[array_keys($parsedJSONArray)[$iterableResponse]];
                if($serverArray["serviceRegion"] == $serviceRegion){
                    return in_array($endpointName, $serverArray["allowedAPIs"]);
                }
            }            
        }

        return false;
    }

    private function checkResponseHeader($curlHeader){
        switch(curl_getinfo($curlHeader, CURLINFO_HTTP_CODE)){
            case "200":
            break;

            case "400":
            throw new \RiotPHP\Exceptions\Riot\Network\BadRequestException();
            break;

            case "401":
            throw new \RiotPHP\Exceptions\Riot\Network\UnauthorizedException();
            break;

            case "403":
            throw new \RiotPHP\Exceptions\Riot\Network\ForbiddenException();
            break;

            case "404":
            throw new \RiotPHP\Exceptions\Riot\Network\DataNotFoundException();
            break;

            case "405":
            throw new \RiotPHP\Exceptions\Riot\Network\MethodNotAllowedException();
            break;

            case "415":
            throw new \RiotPHP\Exceptions\Riot\Network\UnsupportedMediaTypeException();
            break;

            case "429":
            throw new \RiotPHP\Exceptions\Riot\Network\RateLimitException();
            break;

            case "500":
            throw new \RiotPHP\Exceptions\Riot\Network\InternalServerErrorException();
            break;

            case "502":
            throw new \RiotPHP\Exceptions\Riot\Network\BadGatewayException();
            break;

            case "503":
            throw new \RiotPHP\Exceptions\Riot\Network\ServiceUnavailableException();
            break;

            case "504":
            throw new \RiotPHP\Exceptions\Riot\Network\GatewayTimeoutException();
            break;

            case false:
            throw new \Exception("cURL error");
            break;

            default:
            break;
        }
        
    }
}