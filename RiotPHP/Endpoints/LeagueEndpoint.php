<?php

namespace RiotPHP\Endpoints;

/**
 * Class LeagueEndpoint
 * This class is related to the /lol/league/v4/ API endpoint.
 * It's basically all the available methods embedded in the RiotPHP environment
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class LeagueEndpoint extends GenericEndpoint
{
    /**
     * Get challenger league composition for a specified ranked queue type
     * @see /lol/league/v4/challengerleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return \RiotPHP\DTO\LeagueListDTO Data object
     * @throws \RiotPHP\Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChallengerLeagueForGivenQueue($givenQueue = \RiotPHP\Collections\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/challengerleagues/by-queue/" . $givenQueue;
        $response = $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query);

        if(is_array($response)){            
            $responseDTO = new \RiotPHP\DTO\LeagueListDTO();
            $responseDTO->setTier($response['tier']);
            $responseDTO->setLeagueId($response['leagueId']);
            $responseDTO->setQueue($response['queue']);
            $responseDTO->setName($response['name']);

            $entriesList = array();

            if(array_key_exists('entries', $response) && is_array($response['entries'])){
                for($iterableResponse = 0; $iterableResponse < count($response['entries']); $iterableResponse++){
                    $leagueItemDTO = new \RiotPHP\DTO\LeagueItemDTO();
                    $leagueItemDTO->setSummonerName($response['entries'][$iterableResponse]['summonerName']);

                    if($response['entries'][$iterableResponse]['hotStreak'] == 1)
                        $leagueItemDTO->setHotStreak(true);
                    else
                        $leagueItemDTO->setHotStreak(false);

                    $leagueItemDTO->setWins($response['entries'][$iterableResponse]['wins']);

                    if($response['entries'][$iterableResponse]['veteran'] == 1)
                        $leagueItemDTO->setVeteran(true);
                    else
                        $leagueItemDTO->setVeteran(false);

                    $leagueItemDTO->setLosses($response['entries'][$iterableResponse]['losses']);

                    if($response['entries'][$iterableResponse]['freshBlood'] == 1)
                        $leagueItemDTO->setFreshBlood(true);
                    else
                        $leagueItemDTO->setFreshBlood(false);

                    if($response['entries'][$iterableResponse]['inactive'] == 1)
                        $leagueItemDTO->setInactive(true);
                    else
                        $leagueItemDTO->setInactive(false);

                    $leagueItemDTO->setRank($response['entries'][$iterableResponse]['rank']);
                    $leagueItemDTO->setSummonerId($response['entries'][$iterableResponse]['summonerId']);
                    $leagueItemDTO->setLeaguePoints($response['entries'][$iterableResponse]['leaguePoints']);

                    if(array_key_exists('miniSeries', $response['entries'][$iterableResponse]) && is_array($response['entries'][$iterableResponse]['miniSeries'])){
                        $miniSeriesDTO = new \RiotPHP\DTO\MiniSeriesDTO();
                        $miniSeriesDTO->setTarget($response['entries'][$iterableResponse]['miniSeries']['target']);
                        $miniSeriesDTO->setWins($response['entries'][$iterableResponse]['miniSeries']['wins']);
                        $miniSeriesDTO->setLosses($response['entries'][$iterableResponse]['miniSeries']['losses']);
                        $miniSeriesDTO->setProgress($response['entries'][$iterableResponse]['miniSeries']['progress']);
                        
                        $leagueItemDTO->setMiniSeries($miniSeriesDTO);
                    }

                    $entriesList[] = $leagueItemDTO;
                }

                $responseDTO->setEntries($entriesList);
            }

            return $responseDTO;
        }

        throw new \RiotPHP\Exceptions\UnsupportedAPICall();
    }

    /**
     * Get grandmaster league composition for a specified ranked queue type
     * @see /lol/league/v4/grandmasterleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return array|string Data array
     * @throws \RiotPHP\Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getGrandmasterLeagueForGivenQueue($givenQueue = \RiotPHP\Collections\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/grandmasterleagues/by-queue/" . $givenQueue;
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query);
    }

    /**
     * Get master league composition for a specified ranked queue type
     * @see /lol/league/v4/masterleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return array|string Data array
     * @throws \RiotPHP\Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMasterLeagueForGivenQueue($givenQueue = \RiotPHP\Collections\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/masterleagues/by-queue/" . $givenQueue;
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query);
    }    

    /**
     * Get league entries for a specific summoner
     * @see /lol/league/v4/entries/by-summoner/{encryptedSummonerId}
     * @param $encryptedSummonerID string Encrypted summoner ID
     * @return array|string Data array
     * @throws \RiotPHP\Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeaguesEntriesBySummonerID($encryptedSummonerID){
        $query = "https://" . $this->host . "/lol/league/v4/entries/by-summoner/" . $encryptedSummonerID;
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query);
    }

    /**
     * Get league entries for a specific tier and division. Page is specifiable
     * @see /lol/league/v4/entries/{queue}/{tier}/{division}
     * @param $givenQueue \RiotPHP\Collections\RankedQueueType Queue type, bundled into a RankedQueueType object
     * @param $givenTier \RiotPHP\Collections\Tier Tier, bundled into a Tier object (Goes from Diamond to Iron)
     * @param $givenDivision \RiotPHP\Collections\Division Division, bundled into a Division object (Goes from I tp IV)
     * @param $page string Page (Default : 1)
     * @return array|string Data array
     * @throws \RiotPHP\Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeaguesEntriesByQueueAndTierAndDivision($givenQueue, $givenTier, $givenDivision, $page = 1){
        $query = "https://" . $this->host . "/lol/league/v4/entries/" . $givenQueue . "/" . $givenTier . "/" . $givenDivision . "?page=" . $page;
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query);
    }

    /**
     * Get league entries for a specific summoner
     * @see /lol/league/v4/leagues/{leagueID}
     * @param $leagueID string League ID
     * @return array|string Data array
     * @throws \RiotPHP\Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeagueByLeagueID($leagueID){
        $query = "https://" . $this->host . "/lol/league/v4/leagues/" . $leagueID;
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query);
    }
}