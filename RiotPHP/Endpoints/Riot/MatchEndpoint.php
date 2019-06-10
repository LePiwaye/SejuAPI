<?php

namespace RiotPHP\Endpoints\Riot;

/**
 * Class MatchEndpoint
 * This class is related to the /lol/match/v4/ API endpoint.
 * It's basically all the available methods embedded in the RiotPHP environment
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class MatchEndpoint extends GenericEndpoint
{
    public function __construct(){
        parent::__construct();
        $this->endpointName = \RiotPHP\Collections\Riot\EndpointDescriptor::MATCH;
    }

    /**
     * Get match by match ID.
     * @see /lol/match/v4/matches/{matchId}
     * @param $matchId int Match ID
     * @return \RiotPHP\DTO\Riot\MatchDTO Data object
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMatch($matchId){
        $query = "https://" . $this->host . "/lol/match/v4/matches/" . $matchId;
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \RiotPHP\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = new \RiotPHP\DTO\Riot\MatchDTO();

            $responseDTO->setSeasonId($response["seasonId"]);
            $responseDTO->setQueueId($response["queueId"]);
            $responseDTO->setGameId($response["gameId"]);
            $responseDTO->setGameVersion($response["gameVersion"]);
            $responseDTO->setPlatformId($response["platformId"]);
            $responseDTO->setGameMode($response["gameMode"]);
            $responseDTO->setMapId($response["mapId"]);
            $responseDTO->setGameType($response["gameType"]);
            $responseDTO->setGameCreation($response["gameCreation"]);
            $responseDTO->setGameDuration($response["gameDuration"]);

            //TODO : participantIdentities, teams, participants
            return $responseDTO;
        }

        throw new \RiotPHP\Exceptions\Riot\UnsupportedAPICall();
    }
}