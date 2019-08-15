<?php

namespace SejuAPI\Endpoints\Riot;

/**
 * Class LeagueEndpoint
 * This class is related to the /lol/league/v4/ API endpoint.
 * It's basically all the available methods embedded in the SejuAPI environment
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class LeagueEndpoint extends GenericEndpoint
{
    
    public function __construct(){
        parent::__construct();
        $this->endpointName = \SejuAPI\Collections\Riot\EndpointDescriptor::LEAGUE;
    }

    /**
     * Get challenger league composition for a specified ranked queue type
     * @see /lol/league/v4/challengerleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return \SejuAPI\DTO\Riot\LeagueListDTO Data object
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChallengerLeagueForGivenQueue($givenQueue = \SejuAPI\Collections\Riot\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/challengerleagues/by-queue/" . $givenQueue;
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = new \SejuAPI\DTO\Riot\LeagueListDTO();
            $responseDTO->setTier($response['tier']);
            $responseDTO->setLeagueId($response['leagueId']);
            $responseDTO->setQueue($response['queue']);
            $responseDTO->setName($response['name']);

            $entriesList = array();

            if(array_key_exists('entries', $response) && is_array($response['entries'])){
                for($iterableResponse = 0; $iterableResponse < count($response['entries']); $iterableResponse++){
                    $leagueItemDTO = new \SejuAPI\DTO\Riot\LeagueItemDTO();
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
                        $miniSeriesDTO = new \SejuAPI\DTO\Riot\MiniSeriesDTO();
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

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();
    }

    /**
     * Get grandmaster league composition for a specified ranked queue type
     * @see /lol/league/v4/grandmasterleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return \SejuAPI\DTO\Riot\LeagueListDTO Data object
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getGrandmasterLeagueForGivenQueue($givenQueue = \SejuAPI\Collections\Riot\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/grandmasterleagues/by-queue/" . $givenQueue;
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = new \SejuAPI\DTO\Riot\LeagueListDTO();
            $responseDTO->setTier($response['tier']);
            $responseDTO->setLeagueId($response['leagueId']);
            $responseDTO->setQueue($response['queue']);
            $responseDTO->setName($response['name']);

            $entriesList = array();

            if(array_key_exists('entries', $response) && is_array($response['entries'])){
                for($iterableResponse = 0; $iterableResponse < count($response['entries']); $iterableResponse++){
                    $leagueItemDTO = new \SejuAPI\DTO\Riot\LeagueItemDTO();
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
                        $miniSeriesDTO = new \SejuAPI\DTO\Riot\MiniSeriesDTO();
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

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();
    }

    /**
     * Get master league composition for a specified ranked queue type
     * @see /lol/league/v4/masterleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return \SejuAPI\DTO\Riot\LeagueListDTO Data object
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMasterLeagueForGivenQueue($givenQueue = \SejuAPI\Collections\Riot\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/masterleagues/by-queue/" . $givenQueue;
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = new \SejuAPI\DTO\Riot\LeagueListDTO();
            $responseDTO->setTier($response['tier']);
            $responseDTO->setLeagueId($response['leagueId']);
            $responseDTO->setQueue($response['queue']);
            $responseDTO->setName($response['name']);

            $entriesList = array();

            if(array_key_exists('entries', $response) && is_array($response['entries'])){
                for($iterableResponse = 0; $iterableResponse < count($response['entries']); $iterableResponse++){
                    $leagueItemDTO = new \SejuAPI\DTO\Riot\LeagueItemDTO();
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
                        $miniSeriesDTO = new \SejuAPI\DTO\Riot\MiniSeriesDTO();
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

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();
    }    

    /**
     * Get league entries for a specific summoner
     * @see /lol/league/v4/entries/by-summoner/{encryptedSummonerId}
     * @param $encryptedSummonerID string Encrypted summoner ID
     * @return array(\SejuAPI\DTO\Riot\LeagueEntryDTO) Data array
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeaguesEntriesBySummonerID($encryptedSummonerID){
        $query = "https://" . $this->host . "/lol/league/v4/entries/by-summoner/" . $encryptedSummonerID;
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = array();

            for($iterableResponse = 0; $iterableResponse < count($response); $iterableResponse++){
                $leagueEntryDTO = new \SejuAPI\DTO\Riot\LeagueEntryDTO();

                $leagueEntryDTO->setQueueType($response[$iterableResponse]['queueType']);
                $leagueEntryDTO->setSummonerName($response[$iterableResponse]['summonerName']);

                if($response[$iterableResponse]['hotStreak'] == 1)
                    $leagueEntryDTO->setHotStreak(true);
                else
                    $leagueEntryDTO->setHotStreak(false);

                if(array_key_exists('miniSeries', $response[$iterableResponse]) && is_array($response[$iterableResponse]['miniSeries'])){
                    $miniSeriesDTO = new \SejuAPI\DTO\Riot\MiniSeriesDTO();

                    $miniSeriesDTO->setTarget($response[$iterableResponse]['miniSeries']['target']);
                    $miniSeriesDTO->setWins($response[$iterableResponse]['miniSeries']['wins']);
                    $miniSeriesDTO->setLosses($response[$iterableResponse]['miniSeries']['losses']);
                    $miniSeriesDTO->setProgress($response[$iterableResponse]['miniSeries']['progress']);
                    
                    $leagueEntryDTO->setMiniSeries($miniSeriesDTO);
                }

                $leagueEntryDTO->setWins($response[$iterableResponse]['wins']);

                if($response[$iterableResponse]['veteran'] == 1)
                    $leagueEntryDTO->setVeteran(true);
                else
                    $leagueEntryDTO->setVeteran(false);

                $leagueEntryDTO->setLosses($response[$iterableResponse]['losses']);
                $leagueEntryDTO->setRank($response[$iterableResponse]['rank']);
                $leagueEntryDTO->setLeagueId($response[$iterableResponse]['leagueId']);
                
                if($response[$iterableResponse]['inactive'] == 1)
                    $leagueEntryDTO->setInactive(true);
                else
                    $leagueEntryDTO->setInactive(false);

                if($response[$iterableResponse]['freshBlood'] == 1)
                    $leagueEntryDTO->setFreshBlood(true);
                else
                    $leagueEntryDTO->setFreshBlood(false);
                
                $leagueEntryDTO->setTier($response[$iterableResponse]['tier']);
                $leagueEntryDTO->setSummonerId($response[$iterableResponse]['summonerId']);
                $leagueEntryDTO->setLeaguePoints($response[$iterableResponse]['leaguePoints']);

                $responseDTO[] = $leagueEntryDTO;
            }

            return $responseDTO;
        }

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();
    }

    /**
     * Get league entries for a specific tier and division. Page is specifiable
     * @see /lol/league/v4/entries/{queue}/{tier}/{division}
     * @param $givenQueue \SejuAPI\Collections\RankedQueueType Queue type, bundled into a RankedQueueType object
     * @param $givenTier \SejuAPI\Collections\Tier Tier, bundled into a Tier object (Goes from Diamond to Iron)
     * @param $givenDivision \SejuAPI\Collections\Division Division, bundled into a Division object (Goes from I tp IV)
     * @param $page string Page (Default : 1)
     * @return array(\SejuAPI\DTO\Riot\LeagueEntryDTO) Data array
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeaguesEntriesByQueueAndTierAndDivision($givenQueue, $givenTier, $givenDivision, $page = 1){
        $query = "https://" . $this->host . "/lol/league/v4/entries/" . $givenQueue . "/" . $givenTier . "/" . $givenDivision . "?page=" . $page;
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = array();

            for($iterableResponse = 0; $iterableResponse < count($response); $iterableResponse++){
                $leagueEntryDTO = new \SejuAPI\DTO\Riot\LeagueEntryDTO();

                $leagueEntryDTO->setQueueType($response[$iterableResponse]['queueType']);
                $leagueEntryDTO->setSummonerName($response[$iterableResponse]['summonerName']);

                if($response[$iterableResponse]['hotStreak'] == 1)
                    $leagueEntryDTO->setHotStreak(true);
                else
                    $leagueEntryDTO->setHotStreak(false);

                if(array_key_exists('miniSeries', $response[$iterableResponse]) && is_array($response[$iterableResponse]['miniSeries'])){
                    $miniSeriesDTO = new \SejuAPI\DTO\Riot\MiniSeriesDTO();

                    $miniSeriesDTO->setTarget($response[$iterableResponse]['miniSeries']['target']);
                    $miniSeriesDTO->setWins($response[$iterableResponse]['miniSeries']['wins']);
                    $miniSeriesDTO->setLosses($response[$iterableResponse]['miniSeries']['losses']);
                    $miniSeriesDTO->setProgress($response[$iterableResponse]['miniSeries']['progress']);
                    
                    $leagueEntryDTO->setMiniSeries($miniSeriesDTO);
                }

                $leagueEntryDTO->setWins($response[$iterableResponse]['wins']);

                if($response[$iterableResponse]['veteran'] == 1)
                    $leagueEntryDTO->setVeteran(true);
                else
                    $leagueEntryDTO->setVeteran(false);

                $leagueEntryDTO->setLosses($response[$iterableResponse]['losses']);
                $leagueEntryDTO->setRank($response[$iterableResponse]['rank']);
                $leagueEntryDTO->setLeagueId($response[$iterableResponse]['leagueId']);
                
                if($response[$iterableResponse]['inactive'] == 1)
                    $leagueEntryDTO->setInactive(true);
                else
                    $leagueEntryDTO->setInactive(false);

                if($response[$iterableResponse]['freshBlood'] == 1)
                    $leagueEntryDTO->setFreshBlood(true);
                else
                    $leagueEntryDTO->setFreshBlood(false);
                
                $leagueEntryDTO->setTier($response[$iterableResponse]['tier']);
                $leagueEntryDTO->setSummonerId($response[$iterableResponse]['summonerId']);
                $leagueEntryDTO->setLeaguePoints($response[$iterableResponse]['leaguePoints']);

                $responseDTO[] = $leagueEntryDTO;
            }

            return $responseDTO;
        }

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();
    }

    /**
     * Get league entries for a specific league ID
     * @see /lol/league/v4/leagues/{leagueID}
     * @param $leagueID string League ID
     * @return \SejuAPI\DTO\Riot\LeagueListDTO Data object
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeagueByLeagueID($leagueID){
        $query = "https://" . $this->host . "/lol/league/v4/leagues/" . $leagueID;
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = new \SejuAPI\DTO\Riot\LeagueListDTO();
            $responseDTO->setTier($response['tier']);
            $responseDTO->setLeagueId($response['leagueId']);
            $responseDTO->setQueue($response['queue']);
            $responseDTO->setName($response['name']);

            $entriesList = array();

            if(array_key_exists('entries', $response) && is_array($response['entries'])){
                for($iterableResponse = 0; $iterableResponse < count($response['entries']); $iterableResponse++){
                    $leagueItemDTO = new \SejuAPI\DTO\Riot\LeagueItemDTO();
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
                        $miniSeriesDTO = new \SejuAPI\DTO\Riot\MiniSeriesDTO();

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

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();
    }
}