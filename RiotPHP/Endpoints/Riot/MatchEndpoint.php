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

            //Team infos
            $teamArray = array();

            if(array_key_exists("teams",$response) && is_array($response["teams"])){
                $internalTeamArray = $response["teams"];
                for($ATL = 0; $ATL < count($internalTeamArray); $ATL++){
                    $team = new \RiotPHP\DTO\Riot\TeamStatsDTO();

                    $team->setTeamId($internalTeamArray[$ATL]["teamId"]);
                    $team->setWin($internalTeamArray[$ATL]["win"]);
                    $team->setBaronKills($internalTeamArray[$ATL]["baronKills"]);
                    $team->setRiftHeraldKills($internalTeamArray[$ATL]["riftHeraldKills"]);
                    $team->setVilemawKills($internalTeamArray[$ATL]["vilemawKills"]);
                    $team->setInhibitorKills($internalTeamArray[$ATL]["inhibitorKills"]);
                    $team->setTowerKills($internalTeamArray[$ATL]["towerKills"]);
                    $team->setDominionVictoryScore($internalTeamArray[$ATL]["dominionVictoryScore"]);
                    $team->setDragonKills($internalTeamArray[$ATL]["dragonKills"]);

                    if($internalTeamArray[$ATL]['firstDragon'] == 1)
                        $team->setFirstDragon(true);
                    else
                        $team->setFirstDragon(false);

                    if($internalTeamArray[$ATL]['firstInhibitor'] == 1)
                        $team->setFirstInhibitor(true);
                    else
                        $team->setFirstInhibitor(false);

                    if($internalTeamArray[$ATL]['firstRiftHerald'] == 1)
                        $team->setFirstRiftHerald(true);
                    else
                        $team->setFirstRiftHerald(false);

                    if($internalTeamArray[$ATL]['firstBaron'] == 1)
                        $team->setFirstBaron(true);
                    else
                        $team->setFirstBaron(false);
                    
                    if($internalTeamArray[$ATL]['firstBlood'] == 1)
                        $team->setFirstBlood(true);
                    else
                        $team->setFirstBlood(false);

                    if($internalTeamArray[$ATL]['firstTower'] == 1)
                        $team->setFirstTower(true);
                    else
                        $team->setFirstTower(false);

                    $bans = array();

                    if(array_key_exists("bans",$response["teams"][$ATL]) && is_array($response["teams"][$ATL]["bans"])){
                        $internalBanArray = $response["teams"][$ATL]["bans"];
                        for($IBAL = 0; $IBAL < count($internalBanArray); $IBAL++){
                            $ban = new \RiotPHP\DTO\Riot\TeamBansDTO();
                            
                            $ban->setChampionId($internalBanArray[$IBAL]["championId"]);
                            $ban->setPickTurn($internalBanArray[$IBAL]["pickTurn"]);

                            $bans[] = $ban;
                        }
                    }                    

                    $team->setBans($bans);    

                    $teamArray[] = $team;
                }
            }

            $responseDTO->setTeams($teamArray);

            //TODO : participants

            //ParticipantsIdentity infos
            $participantsIdentityArray = array();

            if(array_key_exists("participantIdentities",$response) && is_array($response["participantIdentities"])){
               $internalParticipantsIdentitiesArray = $response["participantIdentities"];
               for($IPIAL = 0; $IPIAL < count($internalParticipantsIdentitiesArray); $IPIAL++){
                   $participantIdentity = new \RiotPHP\DTO\Riot\ParticipantIdentityDTO();

                   $participantIdentity->setParticipantId($internalParticipantsIdentitiesArray[$IPIAL]["participantId"]);

                   if(array_key_exists("player",$internalParticipantsIdentitiesArray[$IPIAL]) && is_array($internalParticipantsIdentitiesArray[$IPIAL]["player"])){
                        $internalPlayer = $internalParticipantsIdentitiesArray[$IPIAL]["player"];

                        $playerDTO = new \RiotPHP\DTO\Riot\PlayerDTO();

                        $playerDTO->setAccountId($internalPlayer["accountId"]);
                        $playerDTO->setSummonerId($internalPlayer["summonerId"]);
                        $playerDTO->setProfileIcon($internalPlayer["profileIcon"]);
                        $playerDTO->setCurrentAccountId($internalPlayer["currentAccountId"]);
                        $playerDTO->setPlatformId($internalPlayer["platformId"]);
                        $playerDTO->setMatchHistoryUri($internalPlayer["matchHistoryUri"]);
                        $playerDTO->setSummonerName($internalPlayer["summonerName"]);
                        $playerDTO->setCurrentPlatformId($internalPlayer["currentPlatformId"]);

                        $participantIdentity->setPlayer($playerDTO);
                   }

                   $participantsIdentityArray[] = $participantIdentity;
               }
            }

            $responseDTO->setParticipantIdentities($participantsIdentityArray);

            return $responseDTO;
        }

        throw new \RiotPHP\Exceptions\Riot\UnsupportedAPICall();
    }
}