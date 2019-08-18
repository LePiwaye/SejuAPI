<?php

namespace SejuAPI\Endpoints\Riot;

/**
 * Class MatchEndpoint
 * This class is related to the /lol/match/v4/ API endpoint.
 * It's basically all the available methods embedded in the SejuAPI environment
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class MatchEndpoint extends GenericEndpoint
{
    public function __construct(){
        parent::__construct();
        $this->endpointName = \SejuAPI\Collections\Riot\EndpointDescriptor::MATCH;
    }

    /**
     * Get match by match ID.
     * @see /lol/match/v4/matches/{matchId}
     * @param $matchId int Match ID
     * @return \SejuAPI\DTO\Riot\MatchDTO Data object
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMatch($matchId){
        $query = "https://" . $this->host . "/lol/match/v4/matches/" . $matchId;
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = new \SejuAPI\DTO\Riot\MatchDTO();

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
                    $team = new \SejuAPI\DTO\Riot\TeamStatsDTO();

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
                            $ban = new \SejuAPI\DTO\Riot\TeamBansDTO();
                            
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

            //ParticipantsIdentity infos
            $participantsIdentityArray = array();

            if(array_key_exists("participantIdentities",$response) && is_array($response["participantIdentities"])){
               $internalParticipantsIdentitiesArray = $response["participantIdentities"];
               for($IPIAL = 0; $IPIAL < count($internalParticipantsIdentitiesArray); $IPIAL++){
                   $participantIdentity = new \SejuAPI\DTO\Riot\ParticipantIdentityDTO();

                   $participantIdentity->setParticipantId($internalParticipantsIdentitiesArray[$IPIAL]["participantId"]);

                   if(array_key_exists("player",$internalParticipantsIdentitiesArray[$IPIAL]) && is_array($internalParticipantsIdentitiesArray[$IPIAL]["player"])){
                        $internalPlayer = $internalParticipantsIdentitiesArray[$IPIAL]["player"];

                        $playerDTO = new \SejuAPI\DTO\Riot\PlayerDTO();

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

            //Participants infos
            $participantsArray = array();

            if(array_key_exists("participants",$response) && is_array($response["participants"])){
               $internalParticipantsArray = $response["participants"];
               for($IPAL = 0; $IPAL < count($internalParticipantsArray); $IPAL++){
                    $participant = new \SejuAPI\DTO\Riot\ParticipantDTO();

                    $participant->setParticipantId($internalParticipantsArray[$IPAL]["participantId"]);
                    $participant->setTeamId($internalParticipantsArray[$IPAL]["teamId"]);
                    $participant->setSpell2Id($internalParticipantsArray[$IPAL]["spell2Id"]);
                    $participant->setSpell1Id($internalParticipantsArray[$IPAL]["spell1Id"]);                    
                    $participant->setChampionId($internalParticipantsArray[$IPAL]["championId"]);

                    if(array_key_exists("highestAchievedSeasonTier",$internalParticipantsArray[$IPAL]))
                        $participant->setHighestAchievedSeasonTier($internalParticipantsArray[$IPAL]["highestAchievedSeasonTier"]);

                    //Rune INFO
                    $internalRunesArray = array();
                    if(array_key_exists("runes",$internalParticipantsArray[$IPAL]) && is_array($internalParticipantsArray[$IPAL]["runes"])){
                        $runeArray = $internalParticipantsArray[$IPAL]["runes"];
                        for($RAL = 0; $RAL < count($runeArray); $RAL++){
                            $rune = new \SejuAPI\DTO\Riot\RuneDTO();
                            $rune->setRuneId($runeArray[$RAL]["runeId"]);
                            $rune->setRank($runeArray[$RAL]["rank"]);
                            $internalRunesArray[] = $rune;
                        }
                    }
                    $participant->setRunes($internalRunesArray);

                    //Mastery INFO
                    $internalMasteryArray = array();
                    if(array_key_exists("masteries",$internalParticipantsArray[$IPAL]) && is_array($internalParticipantsArray[$IPAL]["masteries"])){
                        $masteryArray = $internalParticipantsArray[$IPAL]["masteries"];
                        for($MAL = 0; $MAL < count($masteryArray); $MAL++){
                            $mastery = new \SejuAPI\DTO\Riot\MasteryDTO();
                            $mastery->setMasteryId($runeArray[$MAL]["masteryId"]);
                            $mastery->setRank($runeArray[$MAL]["rank"]);
                            $internalMasteryArray[] = $mastery;
                        }
                    }
                    $participant->setMasteries($internalMasteryArray);

                    //Timeline
                    if(array_key_exists("timeline",$internalParticipantsArray[$IPAL]) && is_array($internalParticipantsArray[$IPAL]["timeline"])){
                        $timelineArray = $internalParticipantsArray[$IPAL]["timeline"];
                        $timeline = new \SejuAPI\DTO\Riot\ParticipantTimelineDTO();

                        $timeline->setParticipantId($timelineArray["participantId"]);
                        $timeline->setRole($timelineArray["role"]);
                        $timeline->setLane($timelineArray["lane"]);

                        if(array_key_exists("csDiffPerMinDeltas",$timelineArray))
                            $timeline->setCsDiffPerMinDeltas($timelineArray["csDiffPerMinDeltas"]);

                        if(array_key_exists("creepsPerMinDeltas",$timelineArray))
                            $timeline->setCreepsPerMinDeltas($timelineArray["creepsPerMinDeltas"]);

                        if(array_key_exists("xpPerMinDeltas",$timelineArray))
                            $timeline->setXpPerMinDeltas($timelineArray["xpPerMinDeltas"]);

                        if(array_key_exists("goldPerMinDeltas",$timelineArray))
                            $timeline->setGoldPerMinDeltas($timelineArray["goldPerMinDeltas"]);

                        if(array_key_exists("xpDiffPerMinDeltas",$timelineArray))
                            $timeline->setXpDiffPerMinDeltas($timelineArray["xpDiffPerMinDeltas"]);

                        if(array_key_exists("damageTakenPerMinDeltas",$timelineArray))
                            $timeline->setDamageTakenPerMinDeltas($timelineArray["damageTakenPerMinDeltas"]);

                        if(array_key_exists("damageTakenDiffPerMinDeltas",$timelineArray))
                            $timeline->setDamageTakenDiffPerMinDeltas($timelineArray["damageTakenDiffPerMinDeltas"]);

                        $participant->setTimeline($timeline);
                    }

                    //Stats
                    if(array_key_exists("stats",$internalParticipantsArray[$IPAL]) && is_array($internalParticipantsArray[$IPAL]["stats"])){
                        $statsData = $internalParticipantsArray[$IPAL]["stats"];
                        $stats = new \SejuAPI\DTO\Riot\ParticipantStatsDto();

                        if($statsData["firstBloodAssist"] == 1)
                            $stats->setFirstBloodAssist(true);
                        else
                            $stats->setFirstBloodAssist(false);

                        $stats->setVisionScore($statsData["visionScore"]);
                        $stats->setMagicDamageDealtToChampions($statsData["magicDamageDealtToChampions"]);
                        $stats->setDamageDealtToObjectives($statsData["damageDealtToObjectives"]);
                        $stats->setTotalTimeCrowdControlDealt($statsData["totalTimeCrowdControlDealt"]);
                        $stats->setLongestTimeSpentLiving($statsData["longestTimeSpentLiving"]);
                        $stats->setPerk1Var1($statsData["perk1Var1"]);
                        $stats->setPerk1Var2($statsData["perk1Var2"]);
                        $stats->setPerk1Var3($statsData["perk1Var3"]);
                        $stats->setTripleKills($statsData["tripleKills"]);
                        $stats->setPerk3Var3($statsData["perk3Var3"]);

                        if(array_key_exists("nodeNeutralizeAssist",$statsData))
                            $stats->setNodeNeutralizeAssist($statsData["nodeNeutralizeAssist"]);

                        $stats->setPerk3Var2($statsData["perk3Var2"]);
                        $stats->setPerk3Var1($statsData["perk3Var1"]);
                        $stats->setKills($statsData["kills"]);
                        $stats->setPlayerScore0($statsData["playerScore0"]);
                        $stats->setPlayerScore1($statsData["playerScore1"]);
                        $stats->setPlayerScore2($statsData["playerScore2"]);
                        $stats->setPlayerScore3($statsData["playerScore3"]);
                        $stats->setPlayerScore4($statsData["playerScore4"]);
                        $stats->setPlayerScore5($statsData["playerScore5"]);
                        $stats->setPlayerScore6($statsData["playerScore6"]);
                        $stats->setPlayerScore7($statsData["playerScore7"]);
                        $stats->setPlayerScore8($statsData["playerScore8"]);
                        $stats->setPlayerScore9($statsData["playerScore9"]);
                        $stats->setPerk5Var1($statsData["perk5Var1"]);
                        $stats->setPerk5Var2($statsData["perk5Var2"]);
                        $stats->setPerk5Var3($statsData["perk5Var3"]);
                        $stats->setPerk0Var1($statsData["perk0Var1"]);
                        $stats->setPerk0Var2($statsData["perk0Var2"]);
                        $stats->setPerk0Var3($statsData["perk0Var3"]);
                        $stats->setTotalUnitsHealed($statsData["totalUnitsHealed"]);
                        $stats->setPerk2Var1($statsData["perk2Var1"]);
                        $stats->setPerk2Var2($statsData["perk2Var2"]);
                        $stats->setPerk2Var3($statsData["perk2Var3"]);
                        $stats->setPerk4Var1($statsData["perk4Var1"]);
                        $stats->setPerk4Var2($statsData["perk4Var2"]);
                        $stats->setPerk4Var3($statsData["perk4Var3"]);
                        $stats->setPerk5Var1($statsData["perk5Var1"]);
                        $stats->setPerk5Var2($statsData["perk5Var2"]);
                        $stats->setPerk5Var3($statsData["perk5Var3"]);
                        $stats->setWardsKilled($statsData["wardsKilled"]);
                        $stats->setLargestCriticalStrike($statsData["largestCriticalStrike"]);
                        $stats->setLargestKillingSpree($statsData["largestKillingSpree"]);
                        $stats->setQuadraKills($statsData["quadraKills"]);
                        
                        if(array_key_exists("teamObjective",$statsData))
                            $stats->setTeamObjective($statsData["teamObjective"]);

                        $stats->setMagicDamageDealt($statsData["magicDamageDealt"]);
                        $stats->setItem0($statsData["item0"]);
                        $stats->setItem1($statsData["item1"]);
                        $stats->setItem2($statsData["item2"]);
                        $stats->setItem3($statsData["item3"]);
                        $stats->setItem4($statsData["item4"]);
                        $stats->setItem5($statsData["item5"]);
                        $stats->setItem6($statsData["item6"]);

                        $stats->setNeutralMinionsKilledTeamJungle($statsData["neutralMinionsKilledTeamJungle"]);

                        $stats->setPerk0($statsData["perk0"]);
                        $stats->setPerk1($statsData["perk1"]);
                        $stats->setPerk2($statsData["perk2"]);
                        $stats->setPerk3($statsData["perk3"]);
                        $stats->setPerk4($statsData["perk4"]);
                        $stats->setPerk5($statsData["perk5"]);

                        $stats->setDamageSelfMitigated($statsData["damageSelfMitigated"]);
                        $stats->setMagicalDamageTaken($statsData["magicalDamageTaken"]);

                        if($statsData["firstInhibitorKill"] == 1)
                            $stats->setFirstInhibitorKill(true);
                        else
                            $stats->setFirstInhibitorKill(false);

                        $stats->setTrueDamageTaken($statsData["trueDamageTaken"]);

                        if(array_key_exists("nodeNeutralize",$statsData))
                            $stats->setNodeNeutralize($statsData["nodeNeutralize"]);

                        $stats->setAssists($statsData["assists"]);
                        $stats->setCombatPlayerScore($statsData["combatPlayerScore"]);
                        $stats->setPerkPrimaryStyle($statsData["perkPrimaryStyle"]);
                        $stats->setGoldSpent($statsData["goldSpent"]);
                        $stats->setTrueDamageDealt($statsData["trueDamageDealt"]);
                        $stats->setParticipantId($statsData["participantId"]);
                        $stats->setTotalDamageTaken($statsData["totalDamageTaken"]);
                        $stats->setPhysicalDamageDealt($statsData["physicalDamageDealt"]);
                        $stats->setSightWardsBoughtInGame($statsData["sightWardsBoughtInGame"]);
                        $stats->setTotalDamageDealtToChampions($statsData["totalDamageDealtToChampions"]);
                        $stats->setPhysicalDamageTaken($statsData["physicalDamageTaken"]);
                        $stats->setTotalPlayerScore($statsData["totalPlayerScore"]);

                        if($statsData["win"] == 1)
                            $stats->setWin(true);
                        else
                            $stats->setWin(false);

                        $stats->setObjectivePlayerScore($statsData["objectivePlayerScore"]);
                        $stats->setTotalDamageDealt($statsData["totalDamageDealt"]);
                        $stats->setNeutralMinionsKilledEnemyJungle($statsData["neutralMinionsKilledEnemyJungle"]);
                        $stats->setDeaths($statsData["deaths"]);
                        $stats->setWardsPlaced($statsData["wardsPlaced"]);
                        $stats->setPerkSubStyle($statsData["perkSubStyle"]);
                        $stats->setTurretKills($statsData["turretKills"]);

                        if($statsData["firstBloodKill"] == 1)
                            $stats->setFirstBloodKill(true);
                        else
                            $stats->setFirstBloodKill(false);

                        $stats->setTrueDamageDealtToChampions($statsData["trueDamageDealtToChampions"]);
                        $stats->setGoldEarned($statsData["goldEarned"]);
                        $stats->setKillingSprees($statsData["killingSprees"]);
                        $stats->setUnrealKills($statsData["unrealKills"]);

                        if(array_key_exists("altarsCaptured",$statsData))
                            $stats->setAltarsCaptured($statsData["altarsCaptured"]);

                        if($statsData["firstTowerAssist"] == 1)
                            $stats->setFirstTowerAssist(true);
                        else
                            $stats->setFirstTowerAssist(false);

                        if($statsData["firstTowerKill"] == 1)
                            $stats->setFirstTowerKill(true);
                        else
                            $stats->setFirstTowerKill(false);

                        $stats->setChampLevel($statsData["champLevel"]);
                        $stats->setDoubleKills($statsData["doubleKills"]);

                        if(array_key_exists("altarsCaptured",$statsData))
                            $stats->setNodeCaptureAssist($statsData["nodeCaptureAssist"]);

                        $stats->setInhibitorKills($statsData["inhibitorKills"]);

                        if($statsData["firstInhibitorAssist"] == 1)
                            $stats->setFirstInhibitorAssist(true);
                        else
                            $stats->setFirstInhibitorAssist(false);

                        $stats->setVisionWardsBoughtInGame($statsData["visionWardsBoughtInGame"]);

                        if(array_key_exists("altarsCaptured",$statsData))
                            $stats->setAltarsNeutralized($statsData["altarsNeutralized"]);

                        $stats->setPentaKills($statsData["pentaKills"]);
                        $stats->setTotalHeal($statsData["totalHeal"]);
                        $stats->setTotalMinionsKilled($statsData["totalMinionsKilled"]);
                        $stats->setTimeCCingOthers($statsData["timeCCingOthers"]);

                        $participant->setStats($stats);
                    }

                    $participantsArray[] = $participant;
               }
            }

            $responseDTO->setParticipants($participantsArray);

            return $responseDTO;
        }

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();
    }

    /**
     * Get matchlist for games played on given account ID and platform ID and filtered using given filter parameters, if any.
     * @see /lol/match/v4/matchlists/by-account/{encryptedAccountId}
     * @param $encryptedAccountId int Encrypted Account ID
     * @param $champion array(int)|int Array of Champion IDs (Numeric values). If this array is not provided, or is empty, every champion data will be used.
     * @param $queue array(\SejuAPI\Collections\Riot\MatchmakingQueue)|array(int)|int Array of Queue IDs (Numeric values) embedded or not in a MatchmakingQueue object. If this array is not provided, or is empty, every queue data will be used.
     * @param $season array(\SejuAPI\Collections\Riot\Season)|array(int)|int Array of Season IDs (Numeric values) embedded or not in a Season object. If this array is not provided, or is empty, every season data will be used.
     * @param $endTime long The end time to use for filtering matchlist specified as epoch milliseconds. If beginTime is specified, but not endTime, then endTime defaults to the the current unix timestamp in milliseconds (the maximum time range limitation is not observed in this specific case). If endTime is specified, but not beginTime, then beginTime defaults to the start of the account's match history returning a 400 due to the maximum time range limitation. If both are specified, then endTime should be greater than beginTime. The maximum time range allowed is one week, otherwise a 400 error code is returned.
     * @param $beginTime long  	The begin time to use for filtering matchlist specified as epoch milliseconds. If beginTime is specified, but not endTime, then endTime defaults to the the current unix timestamp in milliseconds (the maximum time range limitation is not observed in this specific case). If endTime is specified, but not beginTime, then beginTime defaults to the start of the account's match history returning a 400 due to the maximum time range limitation. If both are specified, then endTime should be greater than beginTime. The maximum time range allowed is one week, otherwise a 400 error code is returned.
     * @param $endIndex int The end index to use for filtering matchlist. If beginIndex is specified, but not endIndex, then endIndex defaults to beginIndex+100. If endIndex is specified, but not beginIndex, then beginIndex defaults to 0. If both are specified, then endIndex must be greater than beginIndex. The maximum range allowed is 100, otherwise a 400 error code is returned.
     * @param $beginIndex int  	The begin index to use for filtering matchlist. If beginIndex is specified, but not endIndex, then endIndex defaults to beginIndex+100. If endIndex is specified, but not beginIndex, then beginIndex defaults to 0. If both are specified, then endIndex must be greater than beginIndex. The maximum range allowed is 100, otherwise a 400 error code is returned.
     * @return \SejuAPI\DTO\Riot\MatchlistDTO Data object
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMatchslistsByAccount($encryptedAccountId, $champion = null, $queue = null, $season = null, $endTime = null, $beginTime = null, $endIndex = null, $beginIndex = null){
        $query = "https://" . $this->host . "/lol/match/v4/matchlists/by-account/" . $encryptedAccountId;
        
        //Managing additionnal parameters ADP
        $firstAdditionalAdded = false;

        //ADP : Has champion set been set ?
        if(!is_null($champion)){
            if(!is_array($champion)){
                if(!$firstAdditionalAdded){
                    $query .= "?champion=" . $champion;
                    $firstAdditionalAdded = true;
                }
                else
                    $query .= "&champion=" . $champion;                    
            }
            else{
                foreach($champion as $ch){
                    if(!$firstAdditionalAdded){
                        $query .= "?champion=" . $ch;
                        $firstAdditionalAdded = true;
                    }
                    else
                        $query .= "&champion=" . $ch;       
                }
            }
        }

        //ADP : Has queue set been set ?
        if(!is_null($queue)){
            if(!is_array($queue)){
                if(!$firstAdditionalAdded){
                    $query .= "?queue=" . $queue;
                    $firstAdditionalAdded = true;
                }
                else
                    $query .= "&queue=" . $queue;                    
            }
            else{
                foreach($queue as $qu){
                    if(!$firstAdditionalAdded){
                        $query .= "?queue=" . $qu;
                        $firstAdditionalAdded = true;
                    }
                    else
                        $query .= "&queue=" . $qu;       
                }
            }
        }

        //ADP : Has season set been set ?
        if(!is_null($season)){
            if(!is_array($season)){
                if(!$firstAdditionalAdded){
                    $query .= "?season=" . $season;
                    $firstAdditionalAdded = true;
                }
                else
                    $query .= "&season=" . $season;                    
            }
            else{
                foreach($season as $se){
                    if(!$firstAdditionalAdded){
                        $query .= "?season=" . $se;
                        $firstAdditionalAdded = true;
                    }
                    else
                        $query .= "&season=" . $se;       
                }
            }
        }

        //ADP : Has endTime set been set ?
        if(!is_null($endTime)){
            if(!$firstAdditionalAdded){
                $query .= "?endTime=" . $endTime;
                $firstAdditionalAdded = true;
            }
            else
                $query .= "&endTime=" . $endTime;                    
        }

        //ADP : Has beginTime set been set ?
        if(!is_null($beginTime)){
            if(!$firstAdditionalAdded){
                $query .= "?beginTime=" . $beginTime;
                $firstAdditionalAdded = true;
            }
            else
                $query .= "&beginTime=" . $beginTime;                    
        }

        //ADP : Has endIndex set been set ?
        if(!is_null($endIndex)){
            if(!$firstAdditionalAdded){
                $query .= "?endIndex=" . $endIndex;
                $firstAdditionalAdded = true;
            }
            else
                $query .= "&endIndex=" . $endIndex;                    
        }

        //ADP : Has beginIndex set been set ?
        if(!is_null($beginIndex)){
            if(!$firstAdditionalAdded){
                $query .= "?beginIndex=" . $beginIndex;
                $firstAdditionalAdded = true;
            }
            else
                $query .= "&beginIndex=" . $beginIndex;                    
        }

        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET, $query);

        print_r($response);

        if(is_array($response)){
            $responseDTO = new \SejuAPI\DTO\Riot\MatchlistDto();

            $responseDTO->setTotalGames($response["totalGames"]);
            $responseDTO->setStartIndex($response["startIndex"]);
            $responseDTO->setEndIndex($response["endIndex"]);

            $matchArray = [];
            for($iterableResponse = 0; $iterableResponse < count($response["matches"]); $iterableResponse++){
                $resp = $response["matches"][$iterableResponse];

                $partialResponseDTO = new \SejuAPI\DTO\Riot\MatchReferenceDTO();
                $partialResponseDTO->setLane($resp["lane"]);
                $partialResponseDTO->setGameId($resp["gameId"]);
                $partialResponseDTO->setChampion($resp["champion"]);
                $partialResponseDTO->setPlatformId($resp["platformId"]);
                $partialResponseDTO->setSeason($resp["season"]);
                $partialResponseDTO->setQueue($resp["queue"]);
                $partialResponseDTO->setRole($resp["role"]);
                $partialResponseDTO->setTimestamp($resp["timestamp"]);

                $matchArray[] = $partialResponseDTO;
            }

            $responseDTO->setMatches($matchArray);
            
            return $responseDTO;
        }

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();
    }
}