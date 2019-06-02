<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 30/05/18
 * Time: 11:31
 */

namespace RiotPHP\Endpoints;

/**
 * Class CommonEndpoint
 * This class is designed to handle the common elements required by all the endpoints
 * in order to offer a better maintainability if the Riot API model would change over the time.
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class CommonEndpoint
{
    /**
     * @var string Server name in a human-readable format
     */
    protected $name;

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
     * @var int Set this parameter to ReturnFormat::JSON if you want your data set as JSON, or ReturnFormat::PHP if you want it parsed as a PHP array
     */
    protected $returnFormat;

    /**
     * @var CallManager Endpoint CallManager
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
     * Getter for Return Format (used for unit tests)
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return int Return format
     */
    public function getReturnFormat(){
        return $this->returnFormat;
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
        $this->callManager = new \RiotPHP\Tools\CallManager();
        $this->returnFormat = \RiotPHP\Collections\ReturnFormat::JSON;
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
    public function update($data,$returnFormat){
        if(!is_null($data)){
            $this->name = $data['name'];
            $this->serviceRegion = $data['serviceRegion'];
            $this->servicePlatform = $data['servicePlatform'];
            $this->host = $data['host'];
            $this->proxy = $data['proxy'];
            $this->allowedAPIs = $data['allowedAPIs'];
        }
        $this->returnFormat = $returnFormat;
    }
}