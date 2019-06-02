<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 30/05/18
 * Time: 11:29
 */

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
class LeagueEndpoint extends CommonEndpoint
{
    /**
     * Get challenger league composition for a specified ranked queue type
     * @see /lol/league/v4/challengerleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChallengerLeagueForGivenQueue($givenQueue = Collections\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/challengerleagues/by-queue/" . $givenQueue;
        return $this->callManager->sendQuery($query, $this->returnFormat);
    }

    /**
     * Get grandmaster league composition for a specified ranked queue type
     * @see /lol/league/v4/grandmasterleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getGrandmasterLeagueForGivenQueue($givenQueue = Collections\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/grandmasterleagues/by-queue/" . $givenQueue;
        return $this->callManager->sendQuery($query, $this->returnFormat);
    }

    /**
     * Get master league composition for a specified ranked queue type
     * @see /lol/league/v4/masterleagues/by-queue/{queue}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object (Default : RANKED_SOLO_5x5)
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMasterLeagueForGivenQueue($givenQueue = Collections\RankedQueueType::RANKED_SOLO_5x5){
        $query = "https://" . $this->host . "/lol/league/v4/masterleagues/by-queue/" . $givenQueue;
        return $this->callManager->sendQuery($query, $this->returnFormat);
    }    

    /**
     * Get league entries for a specific summoner
     * @see /lol/league/v4/entries/by-summoner/{encryptedSummonerId}
     * @param $encryptedSummonerID string Encrypted summoner ID
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeaguesEntriesBySummonerID($encryptedSummonerID){
        $query = "https://" . $this->host . "/lol/league/v4/entries/by-summoner/" . $encryptedSummonerID;
        return $this->callManager->sendQuery($query, $this->returnFormat);
    }

    /**
     * Get league entries for a specific tier and division. Page is specifiable
     * @see /lol/league/v4/entries/{queue}/{tier}/{division}
     * @param $givenQueue string Queue type, bundled into a RankedQueueType object
     * @param $givenTier string Tier, bundled into a Tier object (Goes from Diamond to Iron)
     * @param $givenDivision string Division, bundled into a Division object (Goes from I tp IV)
     * @param $page string Page (Default : 1)
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeaguesEntriesByQueueAndTierAndDivision($givenQueue, $givenTier, $givenDivision, $page = 1){
        $query = "https://" . $this->host . "/lol/league/v4/entries/" . $givenQueue . "/" . $givenTier . "/" . $givenDivision . "?page=" . $page;
        return $this->callManager->sendQuery($query, $this->returnFormat);
    }

    /**
     * Get league entries for a specific summoner
     * @see /lol/league/v4/leagues/{leagueID}
     * @param $leagueID string League ID
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeagueByLeagueID($leagueID){
        $query = "https://" . $this->host . "/lol/league/v4/leagues/" . $leagueID;
        return $this->callManager->sendQuery($query, $this->returnFormat);
    }
}