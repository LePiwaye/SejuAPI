<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 02/01/18
 * Time: 09:48
 */

namespace RiotPHP\Endpoints;

/**
 * Class ChampionMasteryEndpoint
 * This class is related to the /lol/champion-mastery/v4/champion-masteries API endpoint.
 * It's basically all the available methods embedded in the RiotPHP environment
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ChampionMasteryEndpoint extends CommonEndpoint
{

    /**
     * Get the champion masteries for each champion for a specified summoner ID
     * @see /lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerID}
     * @param $encryptedSummonerID string Encrypted Summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     */
    public function getChampionMasteriesBySummonerID($encryptedSummonerID){
        $query = "https://" . $this->host . "/lol/champion-mastery/v4/champion-masteries/by-summoner/" . $encryptedSummonerID;
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query, $this->returnFormat);
    }

    /**
     * Get the champion masteries for a specified champion for a specified summoner ID
     * @see /lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerID}/by-champion/{championId}
     * @param $encryptedSummonerID string Encrypted summoner ID
     * @param $championID string Champion ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     */
    public function getChampionMasteryBySummonerIDByChampionID($encryptedSummonerID, $championID){
        $query = "https://" . $this->host . "/lol/champion-mastery/v4/champion-masteries/by-summoner/" . $encryptedSummonerID . "/by-champion/" . $championID;
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query, $this->returnFormat);
    }

    /**
     * Get the champion masteries for a specified champion for a specified summoner ID
     * @see /lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerID}/by-champion/{championId}
     * @param $encryptedSummonerID string Encrypted summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     */
    public function getChampionScoreBySummonerID($encryptedSummonerID){
        $query = "https://" . $this->host . "/lol/champion-mastery/v4/scores/by-summoner/" . $encryptedSummonerID;
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query, $this->returnFormat);
    }
}