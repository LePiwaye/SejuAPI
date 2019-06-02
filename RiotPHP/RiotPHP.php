<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 18/12/17
 * Time: 15:35
 */

namespace RiotPHP;

/**
 * RiotPHP class. This class is designed to handle a Riot server specifications, which are required to launch
 * any API call towards the Riot servers.
 * @package Piwaye
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class RiotPHP
{
    /**
     * @var string Server name in a human-readable format
     */
    private $name;

    /**
     * @var string Service identifier for the current server.
     */
    private $serviceRegion;

    /**
     * @var array Service platform for the current server. This variable is an array due to the North American
     * architecture that might use the 'NA' SR for the old summoners, or 'NA1' for the new summoners. #EUWRules
     */
    private $servicePlatform;

    /**
     * @var string Server host URI, which will be targeted while sending the API calls
     */
    private $host;

    /**
     * @var array Array of allowed APIs for this very server. This data is collected from the Servers.json configuration
     * file located at conf/Servers.json
     */
    private $allowedAPIs;

    /**
     * @var string Server proxy URI, which might be common with another server
     */
    private $proxy;

    /**
     * @var int Set this parameter to ReturnFormat::JSON if you want your data set as JSON, or ReturnFormat::PHP if you want it parsed as a PHP array
     */
    private $returnFormat;

    /**
     * @var ChampionMasteryEndpoint Champion Mastery endpoint manager
     */
    public $championMasteryEndpoint;

    /**
     * @var ChampionEndpoint Champion endpoint manager
     */
    public $championEndpoint;

    /**
     * @var LeagueEndpoint League endpoint manager
     */
    public $leagueEndpoint;

    /**
     * @var LolStatusEndpoint LOL Status endpoint manager
     */
    public $lolStatusEndpoint;

    /**
     * @var MatchEndpoint Match endpoint manager
     */
    public $matchEndpoint;

    /**
     * @var SpectatorEndpoint Spectator endpoint manager
     */
    public $spectatorEndpoint;

    /**
     * @var SummonerEndpoint Summoner endpoint manager
     */
    public $summonerEndpoint;

    /**
     * @var ThirdPartyCodeEndpoint Third party code endpoint manager
     */
    public $thirdPartyCodeEndpoint;

    /**
     * @var TournamentStubEndpoint Tournament stub endpoint manager
     */
    public $tournamentStubEndpoint;

    /**
     * @var TournamentEndpoint Tournament endpoint manager
     */
    public $tournamentEndpoint;

    /**
     * RiotServer constructor. This constructor does next to nothing, but is required to build an instance.
     * @author Piwaye
     * @see RiotServer::setCurrentServer()
     * @since 1.0
     */
    public function __construct(){
        $this->allowedAPIs = array();
        $this->host = null;
        $this->name = null;
        $this->serviceRegion = null;
        $this->servicePlatform = array();
        $this->proxy = null;
        $this->returnFormat = \RiotPHP\Collections\ReturnFormat::JSON;

        $this->initializeManagers();
    }

    /**
     * This method will read the Server configuration file and set correct parameters into this instance.
     * @author Piwaye
     * @param $serverName string Server identifier
     * @since 1.0
     * @throws Exceptions\IllegalServerException Is thrown with an IllegalServer code when a server identifier that isn't described
     *         into the Servers.json file is specified
     * @throws Exceptions\BadJSONDataException If the provided JSON is corrupted
     * @version 1.0
     */
    public function setCurrentServer($serverName){
        $JSONUtils = new \RiotPHP\Tools\JSONUtils();
        $JSONData = $JSONUtils->readJSONFile("../conf/Servers.json");

       if(!is_null($JSONData)){
            $parsedJSONArray = $JSONUtils->parseJSONToArray($JSONData);
            if(!array_key_exists($serverName,$parsedJSONArray)){
                throw new \RiotPHP\Exceptions\IllegalServerException();
            }
            else{
                $this->name = $parsedJSONArray[$serverName]['name'];
                $this->serviceRegion = $parsedJSONArray[$serverName]['serviceRegion'];
                $this->servicePlatform = $parsedJSONArray[$serverName]['servicePlatform'];
                $this->host = $parsedJSONArray[$serverName]['host'];
                $this->proxy = $parsedJSONArray[$serverName]['proxy'];
                $this->allowedAPIs = $parsedJSONArray[$serverName]['allowedAPIs'];

                $this->notifyManagers($parsedJSONArray[$serverName], $this->returnFormat);
            }
        }
    }

    /**
     * Changes global return format
     * @param $returnFormat int New return format
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setReturnFormat($returnFormat){
        $this->returnFormat = $returnFormat;
        $this->notifyManagers(null, $returnFormat);
    }

    /**
     * Initialize every managers used to call the different APIs
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    private function initializeManagers(){
        $this->championMasteryEndpoint = new \RiotPHP\Endpoints\ChampionMasteryEndpoint();
        $this->championEndpoint = new \RiotPHP\Endpoints\ChampionEndpoint();
        $this->leagueEndpoint = new \RiotPHP\Endpoints\LeagueEndpoint();
        $this->lolStatusEndpoint = new \RiotPHP\Endpoints\LolStatusEndpoint();
        $this->matchEndpoint = new \RiotPHP\Endpoints\MatchEndpoint();
        $this->spectatorEndpoint = new \RiotPHP\Endpoints\SpectatorEndpoint();
        $this->summonerEndpoint = new \RiotPHP\Endpoints\SummonerEndpoint();
        $this->thirdPartyCodeEndpoint = new \RiotPHP\Endpoints\ThirdPartyCodeEndpoint();
        $this->tournamentStubEndpoint = new \RiotPHP\Endpoints\TournamentStubEndpoint();
        $this->tournamentEndpoint = new \RiotPHP\Endpoints\TournamentEndpoint();
    }

    /**
     * Notifies every manager when an update is triggered on the RiotServer instance (Updated internal manager data)
     * @param $data array New data that should be persisted into managers
     * @param $returnFormat int Return format
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    private function notifyManagers($data, $returnFormat){
        $this->championMasteryEndpoint->update($data, $returnFormat);
        $this->championEndpoint->update($data,$returnFormat);
        $this->leagueEndpoint->update($data,$returnFormat);
        $this->lolStatusEndpoint->update($data, $returnFormat);
        $this->matchEndpoint->update($data,$returnFormat);
        $this->spectatorEndpoint->update($data,$returnFormat);
        $this->summonerEndpoint->update($data, $returnFormat);
        $this->thirdPartyCodeEndpoint->update($data, $returnFormat);
        $this->tournamentStubEndpoint->update($data,$returnFormat);
        $this->tournamentEndpoint->update($data,$returnFormat);
    }

    /**
     * Getter for Service Region (used for unit tests)
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return string Service region
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
}