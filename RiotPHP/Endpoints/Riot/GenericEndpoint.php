<?php

namespace RiotPHP\Endpoints\Riot;

/**
 * Class CommonEndpoint
 * This class is designed to handle the common elements required by all the endpoints
 * in order to offer a better maintainability if the Riot API model would change over the time.
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class GenericEndpoint
{
    /**
     * @var string Server name in a human-readable format
     */
    protected $name;

    /**
     * @var string Endpoint name
     */
    protected $endpointName;

    /**
     * @var string Service identifier for the current server.
     */
    protected $serviceRegion;

    /**
     * @var array Service platform for the current server. This variable is an array due to the North American
     * architecture that might use the 'NA' SR for the old summoners, or 'NA1' for the new summoners. #EUWRules
     */
    protected $servicePlatform;

    /**
     * @var string Server host URI, which will be targeted while sending the API calls
     */
    protected $host;

    /**
     * @var array Array of allowed APIs for this very server. This data is collected from the Servers.json configuration
     * file located at conf/Servers.json
     */
    protected $allowedAPIs;

    /**
     * @var string Server proxy URI, which might be common with another server
     */
    protected $proxy;

    /**
     * @var \RiotPHP\Tools\Riot\CallManager Endpoint CallManager
     */
    protected $callManager;

    /**
     * Getter for Service Region (used for unit tests)
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getServiceRegion(){
        return $this->serviceRegion;
    }
    /**
     * Champion Mastery constructor. This constructor does next to nothing, but is required to build an instance.
     * @author Piwaye
     * @see RiotServer::setCurrentServer()
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->allowedAPIs = array();
        $this->host = null;
        $this->name = null;
        $this->serviceRegion = null;
        $this->servicePlatform = array();
        $this->proxy = null;
        $this->callManager = new \RiotPHP\Tools\Riot\CallManager();
    }

    /**
     * Updates manager according to the passed data (i.e. : Set a new server)
     * @param $data array New server data
     * @param $returnFormat int Return format
     * @author Piwaye
     * @see RiotServer::setCurrentServer()
     * @since 1.0
     * @version 1.0
     */
    public function update($data){
        if(!is_null($data)){
            $this->name = $data['name'];
            $this->serviceRegion = $data['serviceRegion'];
            $this->servicePlatform = $data['servicePlatform'];
            $this->host = $data['host'];
            $this->proxy = $data['proxy'];
            $this->allowedAPIs = $data['allowedAPIs'];
        }
    }
}