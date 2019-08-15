<?php

namespace SejuAPI;

/**
 * SejuAPI class. This class is designed to handle a Riot server specifications, which are required to launch
 * any API call towards the Riot servers.
 * @package Piwaye
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class SejuAPI
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
     * @var string Server proxy URI, which might be common with another server
     */
    private $proxy;

    /**
     * @var \SejuAPI\Endpoints\Riot\ChampionMasteryEndpoint Champion Mastery endpoint manager
     */
    public $championMasteryEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\ChampionEndpoint Champion endpoint manager
     */
    public $championEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\LeagueEndpoint League endpoint manager
     */
    public $leagueEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\LolStatusEndpoint LOL Status endpoint manager
     */
    public $lolStatusEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\MatchEndpoint Match endpoint manager
     */
    public $matchEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\SpectatorEndpoint Spectator endpoint manager
     */
    public $spectatorEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\SummonerEndpoint Summoner endpoint manager
     */
    public $summonerEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\ThirdPartyCodeEndpoint Third party code endpoint manager
     */
    public $thirdPartyCodeEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\TournamentStubEndpoint Tournament stub endpoint manager
     */
    public $tournamentStubEndpoint;

    /**
     * @var \SejuAPI\Endpoints\Riot\TournamentEndpoint Tournament endpoint manager
     */
    public $tournamentEndpoint;

    /**
     * RiotServer constructor. This constructor does next to nothing, but is required to build an instance.
     * @author Piwaye
     * @see RiotServer::setCurrentServer()
     * @since 1.0
     */
    public function __construct(){
        $this->host = null;
        $this->name = null;
        $this->serviceRegion = null;
        $this->servicePlatform = array();
        $this->proxy = null;

        $this->initializeManagers();
    }

    /**
     * This method will read the Server configuration file and set correct parameters into this instance.
     * @author Piwaye
     * @param $serverName \SejuAPI\Collections\Riot\Server Server identifier
     * @since 1.0
     * @throws \SejuAPI\Exceptions\Riot\IllegalServerException Is thrown with an IllegalServer code when a server identifier that isn't described
     *         into the Servers.json file is specified
     * @version 1.0
     */
    public function setCurrentServer($serverName){
        $JSONUtils = new \SejuAPI\Tools\Riot\JSONUtils();
        $JSONData = $JSONUtils->readJSONFile("../conf/Servers.json");

       if(!is_null($JSONData)){
            $parsedJSONArray = $JSONUtils->parseJSONToArray($JSONData);
            if(!array_key_exists($serverName,$parsedJSONArray)){
                throw new \SejuAPI\Exceptions\Riot\IllegalServerException();
            }
            else{
                $this->name = $parsedJSONArray[$serverName]['name'];
                $this->serviceRegion = $parsedJSONArray[$serverName]['serviceRegion'];
                $this->servicePlatform = $parsedJSONArray[$serverName]['servicePlatform'];
                $this->host = $parsedJSONArray[$serverName]['host'];
                $this->proxy = $parsedJSONArray[$serverName]['proxy'];

                $this->notifyManagers($parsedJSONArray[$serverName]);
            }
        }
    }

    /**
     * Initialize every managers used to call the different APIs
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    private function initializeManagers(){
        $this->championMasteryEndpoint = new \SejuAPI\Endpoints\Riot\ChampionMasteryEndpoint();
        $this->championEndpoint = new \SejuAPI\Endpoints\Riot\ChampionEndpoint();
        $this->leagueEndpoint = new \SejuAPI\Endpoints\Riot\LeagueEndpoint();
        $this->lolStatusEndpoint = new \SejuAPI\Endpoints\Riot\LolStatusEndpoint();
        $this->matchEndpoint = new \SejuAPI\Endpoints\Riot\MatchEndpoint();
        $this->spectatorEndpoint = new \SejuAPI\Endpoints\Riot\SpectatorEndpoint();
        $this->summonerEndpoint = new \SejuAPI\Endpoints\Riot\SummonerEndpoint();
        $this->thirdPartyCodeEndpoint = new \SejuAPI\Endpoints\Riot\ThirdPartyCodeEndpoint();
        $this->tournamentStubEndpoint = new \SejuAPI\Endpoints\Riot\TournamentStubEndpoint();
        $this->tournamentEndpoint = new \SejuAPI\Endpoints\Riot\TournamentEndpoint();
    }

    /**
     * Notifies every manager when an update is triggered on the RiotServer instance (Updated internal manager data)
     * @param $data array New data that should be persisted into managers
     * @param $returnFormat int Return format
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    private function notifyManagers($data){
        $this->championMasteryEndpoint->update($data);
        $this->championEndpoint->update($data);
        $this->leagueEndpoint->update($data);
        $this->lolStatusEndpoint->update($data);
        $this->matchEndpoint->update($data);
        $this->spectatorEndpoint->update($data);
        $this->summonerEndpoint->update($data);
        $this->thirdPartyCodeEndpoint->update($data);
        $this->tournamentStubEndpoint->update($data);
        $this->tournamentEndpoint->update($data);
    }
}